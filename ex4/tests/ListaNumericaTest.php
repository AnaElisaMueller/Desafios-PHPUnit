<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ListaNumerica.php';

class ListaNumericaTest extends TestCase
{
    /*
    Teste para verificar a correta manipulação de uma lista (array) de números em PHP.
    
    **Testes principais:
        *SomarElementos
        *EncontrarMaiorElemento
        *EncontrarMenorElemento
        *ordenarLista
        *filtrarNumerosPares

    Para cada teste principal, há os seguintes testes:
        *Mista
        *Positiva
        *Negativa
        *Vazia

    **Resultado de teste:
    OK (20 tests, 20 assertions)
    */


    #Testar Somar Elementos (somarElementos)
    public function testSomarElementos()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->somarelementos([12, 20, 31, 0, -12]);
        $this->assertEquals(51, $lista);
    }

    public function testSomarElementosPosivos()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->somarelementos([12, 20, 31, 0, 12]);
        $this->assertEquals(75, $lista);
    }

    public function testSomarElementosNegativos()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->somarelementos([-1, -30, -50]);
        $this->assertEquals(-81, $lista);
    }

    public function testSomarElementosVazios()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->somarelementos([]);
        $this->assertEquals(0, $lista);
    }

    #Testar Maior Numero (encontrarMaiorElemento)
    public function testEncontrarMaiorElemento()
    {
        $listaNumerica = new ListaNumerica;
        $maiorNumero = $listaNumerica->encontrarMaiorElemento([20, -55, 1, 40, 0]);
        $this->assertEquals(40, $maiorNumero);
    }

    public function testEncontrarMaiorElementoPositivo()
    {
        $listaNumerica = new ListaNumerica;
        $maiorNumero = $listaNumerica->encontrarMaiorElemento([20, 55, 1, 40]);
        $this->assertEquals(55, $maiorNumero);
    }

    public function testEncontrarMaiorElementoNegativo()
    {
        $listaNumerica = new ListaNumerica;
        $maiorNumero = $listaNumerica->encontrarMaiorElemento([-20, -55, -1, -40]);
        $this->assertEquals(-1, $maiorNumero);
    }

    public function testEncontrarMaiorElementoVazio()
    {
        $listaNumerica = new ListaNumerica;
        $maiorNumero = $listaNumerica->encontrarMaiorElemento([]);
        $this->assertEquals(0, $maiorNumero);
    }

    #Testar Menor Numero (encontrarMenorElemento) 
    public function testEncontrarMenorElemento()
    {
        $listaNumerica = new ListaNumerica;
        $menorNumero = $listaNumerica->encontrarMenorElemento([-20, 55, -1, 40, 0]);
        $this->assertEquals(-20, $menorNumero);
    }

    public function testEncontrarMenorElementoPositivo()
    {
        $listaNumerica = new ListaNumerica;
        $menorNumero = $listaNumerica->encontrarMenorElemento([20, 55, 1, 40]);
        $this->assertEquals(1, $menorNumero);
    }

    public function testEncontrarMenorElementoNegativo()
    {
        $listaNumerica = new ListaNumerica;
        $menorNumero = $listaNumerica->encontrarMenorElemento([-20, -55, -1, -40]);
        $this->assertEquals(-55, $menorNumero);
    }

    public function testEncontrarMenorElementoVazio()
    {
        $listaNumerica = new ListaNumerica;
        $menorNumero = $listaNumerica->encontrarMenorElemento([]);
        $this->assertEquals(0, $menorNumero);
    }


    #Testar Ordenar Lista (ordenarLista) 
    public function testOrdenarLista()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->ordenarLista([20, 55, -1, 40, 0]);
        $this->assertEquals([-1, 0, 20, 40, 55], $lista);
    }

    public function testOrdenarListaPositiva()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->ordenarLista([20, 55, 1, 40]);
        $this->assertEquals([1, 20, 40, 55], $lista);
    }

    public function testOrdenarListaNegativa()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->ordenarLista([-20, -55, -1, -40]);
        $this->assertEquals([-55, -40, -20, -1], $lista);
    }

    public function testOrdenarListaVazia()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->ordenarLista([]);
        $this->assertEquals([], $lista);
    }

    #Testar Filtrar Pares (filtrarNumerosPares) 
    public function testFiltrarNumerosPares()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->filtrarNumerosPares([20, 55, -1, 40, 0]);
        $this->assertEquals([20, 40, 0], $lista);
    }

    public function testFiltrarNumerosParesPositivos()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->filtrarNumerosPares([20, 55, 10, 40]);
        $this->assertEquals([20, 10, 40], $lista);
    }

    public function testFiltrarNumerosParesNegativos()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->filtrarNumerosPares([-20, -55, -1, -40]);
        $this->assertEquals([-20, -40], $lista);
    }

    public function testFiltrarNumerosParesVazios()
    {
        $listaNumerica = new ListaNumerica;
        $lista = $listaNumerica->filtrarNumerosPares([]);
        $this->assertEquals([], $lista);
    }
}
