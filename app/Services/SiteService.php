<?php

namespace App\Services;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Socio;
use Illuminate\Support\Facades\Http;

class SiteService
{
    public function getClientes()
    {
        $clientes = Cliente::whereNull('excluido')
        ->paginate(10)
        ->onEachSide(1)
        ->toArray();
        if(!empty($clientes)){
            foreach ($clientes['data'] as $key => $cliente) {
                $clientes['data'][$key]['cli_formatado'] = $this->formatarTel(strval($cliente['cli_telefone']));
                $clientes['data'][$key]['cli_cnpj'] = $this->formatarCNPJ(strval($cliente['cli_cnpj']));
            }
        }  
        return $clientes;
    }

    function formatarTel($numero)
    {
        $mascara = '(##) #####-####';
        $numeroFormatado = '';
        $indiceMascara = 0;
        
        for ($i = 0; $i < strlen($mascara); $i++) {
            if ($indiceMascara >= strlen($numero)) {
                break;
            }
    
            if ($mascara[$i] === '#') {
                $numeroFormatado .= $numero[$indiceMascara];
                $indiceMascara++;
            } else {
                $numeroFormatado .= $mascara[$i];
            }
        }
        
        return $numeroFormatado;
    }
    
    function removerFormatacaoTel($numeroFormatado)
    {
        $numero = '';
        
        for ($i = 0; $i < strlen($numeroFormatado); $i++) {
            if (is_numeric($numeroFormatado[$i])) {
                $numero .= $numeroFormatado[$i];
            }
        }
        
        return $numero;
    }

    function formatarCNPJ($cnpj)
    {
        $mascara = '##.###.###/####-##';
        $cnpjFormatado = '';
        $indiceMascara = 0;
        
        for ($i = 0; $i < strlen($mascara); $i++) {
            if ($indiceMascara >= strlen($cnpj)) {
                break; // Verificar se já chegou ao fim da string $cnpj
            }
    
            if ($mascara[$i] === '#') {
                $cnpjFormatado .= $cnpj[$indiceMascara];
                $indiceMascara++;
            } else {
                $cnpjFormatado .= $mascara[$i];
            }
        }
        
        return $cnpjFormatado;
    }
    

    function simular($request)
    {
        session()->put('autorizado', true);
        $cnpj = str_replace(['.', '-','/'], '', $request->get('cnpj'));
        $faturamento = str_replace(['.', ',','R$',' '], '', $request->get('faturamento'));
        $telefone =  $request->get('ddd') . $request->get('numero');
        $telefone = $this->removerFormatacaoTel($telefone);
        
        $url = env('CONSULT');
        $cliente = new Cliente();

        try {
            $cliente->cli_nome = $request->get('nome');
            $cliente->cli_telefone = $telefone;
            $cliente->cli_cnpj = $cnpj;
            $cliente->cli_faturamento = $faturamento;
            $cliente->cli_whatsapp = $request->get('cli_whatsapp') ? $request->get('cli_whatsapp') : 'N';
            $cliente->save();
            $clienteId = $cliente->cliente_id;
        } catch (\Throwable $th) {
            return response()->json(['erro' => 'Verifique seus dados e tente novamente'], 400);
        }

        try{

            $response = Http::get($url . $cnpj);
            $data = $response->json();
            
            $empresa = new Empresa();

            $empresa->cliente_id = $clienteId;
            $empresa->emp_nome = $data['nome'];
            $empresa->emp_uf = $data['uf'];
            $empresa->emp_email = $data['email'];
            $empresa->emp_fantasia = $data['fantasia'];
            $empresa->emp_porte = $data['porte'];
            $empresa->emp_situacao = $data['situacao'];
            $empresa->emp_abertura = $data['abertura'];
            $empresa->emp_natureza_juridica = $data['natureza_juridica'];
            $empresa->emp_atividade_principal = $data['atividade_principal'][0]['text'];
            $empresa->emp_atividade_principal_code = $data['atividade_principal'][0]['code'];
            $empresa->save();
            $empresaId = $empresa->empresa_id;

        } catch (\Throwable $th) {
            //return response()->json(['erro' => 'Verifique seus dados e tente novamente'], 400);
            return response()->json(['success' => 'Operação realizada com sucesso'], 200);
        }

        try {
            $socios = $data['qsa'];
            foreach ($socios as $key => $value) {
                $socio = new Socio();
                $socio->soc_nome = $value['nome'];
                $socio->soc_posicao = $value['qual'];
                $socio->empresa_id = $empresaId;
                $socio->save();
            }
        } catch (\Throwable $th) {
            return response()->json(['success' => 'Operação realizada com sucesso'], 201);
        }
        
        return response()->json(['success' => 'Operação realizada com sucesso'], 200);
    }
}