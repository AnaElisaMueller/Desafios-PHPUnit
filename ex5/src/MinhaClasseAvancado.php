<?php

class MinhaClasseAvancado
{

    public function somar($a, $b)
    {
        try {
            if (!isset($a, $b)) {
                throw new Exception("A informação passada não foi definida");
            }

            if (!is_numeric($a)) {
                throw new Exception("A informação passada está incorreta");
            }

            if (!is_numeric($b)) {
                throw new Exception("A informação passada está incorreta");
            }

            return round(($a + $b), 2);

        } catch (Exception $e) {
            print_r($e->getMessage());
            echo " - ";
            echo "ERRO: ";
            print_r($e->getCode());
            echo "\n";
        }
    }

    public function subtrair($a, $b)
    {
        try {
            if (!isset($a, $b)) {
                throw new Exception("A informação passada não foi definida");
            }

            if (!is_numeric($a)) {
                throw new Exception("A informação passada está incorreta");
            }

            if (!is_numeric($b)) {
                throw new Exception("A informação passada está incorreta");
            }

            return round(($a - $b), 2);
            
        } catch (Exception $e) {
            print_r($e->getMessage());
            echo " - ";
            echo "ERRO: ";
            print_r($e->getCode());
            echo "\n";
        }
    }
}
