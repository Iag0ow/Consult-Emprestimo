<?php

namespace App\Services;

use App\Models\Cliente;

class SiteService
{
    public function getClientes()
    {
        $clientes = Cliente::whereNull('excluido')
        ->paginate(2)
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