<?php

namespace App\Services;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Socio;
use Illuminate\Support\Facades\Http;

class SeachService
{
    public function searchClientes($pesquisa)
    {
        $clientes = Cliente::whereNull('excluido')
        ->where('cli_nome', 'LIKE', '%' . $pesquisa . '%')
        ->paginate(10)
        ->onEachSide(1)
        ->toArray();    

        foreach ($clientes['data'] as $key => $cliente) {
            $clientes['data'][$key]['cli_formatado'] = $this->formatarTel(strval($cliente['cli_telefone']));
            $clientes['data'][$key]['cli_cnpj'] = $this->formatarCNPJ(strval($cliente['cli_cnpj']));
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
}