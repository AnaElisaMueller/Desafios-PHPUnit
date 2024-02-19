<?php


use PHPUnit\Framework\TestCase;


require_once 'src/MinhaClasseAvancado.php';


class MinhaClasseAvancadoTest extends TestCase
{
    /*
    Teste para verificar o correto calculo dos métodos somar e subtrair.
    
    **Testes principais:
        *Somar
        *Subtrair

    Para cada teste principal, há os seguintes testes:
        *Mista
        *DecimalComplexo
        *Positiva
        *Negativa
        *Zero
        *String
        
    **Exceptions:
        *Message
        *Code

    **Resultado de teste:
        ....A informação passada está incorreta - ERRO: 0
        .....A informação passada está incorreta - ERRO: 0
        .                                                        10 / 10 (100%)
        OK (12 tests, 12 assertions)
    */


    #Testar Soma Correta(somar)
    public function testSomaCorretaMista()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(-37.7, 5);

            $this->assertEquals(-32.7, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSomaCorretaDecimalComplexo()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(-37.761, 5.32);
            //round(-32.441, 2) = -32,44

            $this->assertEquals(-32.44, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSomaCorretaPositiva()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(10, 70);

            $this->assertEquals(80, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSomaCorretaNegativa()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(-10, -70);

            $this->assertEquals(-80, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSomaCorretaZero()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(10, 0, 2);

            $this->assertEquals(10, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSomaCorretaString()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->somar(10, 'a');

            $this->assertEquals(0, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    #Testar Subtracao Correta(subtrair)

    public function testSubtracaoCorretaMista()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(-10, -5.0);

            $this->assertEquals(-5, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSubtracaoCorretaDecimalComplexo()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(-37.761, 5.32);
            //round(-43.081, 2) = -43.08

            $this->assertEquals(-43.08, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSubtracaoCorretaPositiva()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(70, 37);

            $this->assertEquals(33, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSubtracaoCorretaNegativa()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(-70, -10);

            $this->assertEquals(-60, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSubtracaaoCorretaZero()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(0, 10);

            $this->assertEquals(-10, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }

    public function testSubtracaoCorretaString()
    {
        try {
            $minhaClasseAvancado = new MinhaClasseAvancado();

            $resultado = $minhaClasseAvancado->subtrair(10, 'a');

            $this->assertEquals(0, $resultado);

        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getCode());
        }
    }
}
