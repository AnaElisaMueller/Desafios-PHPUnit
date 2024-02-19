<?php

class ListaNumerica
{

    public function somarElementos(array $lista)
    {
        $somatorio = 0;

        if (isset($lista) && is_array($lista) && !empty($lista)) {

            foreach ($lista as $lista) {

                $somatorio += $lista;
            }
        }
        return $somatorio;
    }

    public function encontrarMaiorElemento(array $lista)
    {
        $maiorNumero = 0;

        if (isset($lista) && is_array($lista) && !empty($lista)) {

            $maiorNumero = $lista[0];

            foreach ($lista as $lista) {

                if ($maiorNumero < $lista) {
                    $maiorNumero = $lista;
                }
            }
        }
        return $maiorNumero;
    }

    public function encontrarMenorElemento(array $lista)
    {
        $menorNumero = 0;

        if (isset($lista) && is_array($lista) && !empty($lista)) {

            $menorNumero = $lista[0];

            foreach ($lista as $lista) {
                if ($menorNumero > $lista) {
                    $menorNumero = $lista;
                }
            }
        }
        return $menorNumero;
    }

    public function ordenarLista(array $lista)
    {

        if (isset($lista) && is_array($lista) && !empty($lista)) {
            sort($lista);
            return $lista;
        }
        return [];
    }

    public function filtrarNumerosPares(array $lista)
    {
        $numerosPares = [];

        if (isset($lista) && is_array($lista) && !empty($lista)) {

            foreach ($lista as $lista) {

                if ($lista % 2 == 0) {
                    $numerosPares[] = $lista;
                }
            }
        }
        return $numerosPares;
    }
}
