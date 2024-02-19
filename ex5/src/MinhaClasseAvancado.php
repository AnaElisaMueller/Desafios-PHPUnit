<?php
// $a = floatval(str_replace(",", ".", $a));
// $b = floatval(str_replace(",", ".", $b)); (colar pornto se colocado virgula )

class MinhaClasseAvancado
{

    public function somar($a, $b)
    {
        try{
        if (!isset($a, $b)) {
            throw new Exception("A informação passada não foi definida");
        }

        if (!is_numeric($a)) {
            throw new Exception("A informação passada está incorreta");
        }

        if (!is_numeric($b)) {
            throw new Exception("A informação passada está incorreta");
        }
        
        number_format($b, 3);
        return number_format($a, 3) + number_format($b, 3);
    } catch (Exception $e){
        print_r($e->getMessage());
        echo " - ";
        echo "ERRO: ";
        print_r($e->getCode());
        echo "\n";
    }
    }

    public function subtrair($a, $b)
    {
        try{
        if (!isset($a, $b)) {
            throw new Exception("A informação passada não foi definida");
        }

        if (!is_numeric($a)) {
            throw new Exception("A informação passada está incorreta");
        }

        if (!is_numeric($b)) {
            throw new Exception("A informação passada está incorreta");
        }

        return $a - $b;
    } catch (Exception $e){
        print_r($e->getMessage());
        echo " - ";
        echo "ERRO: ";
        print_r($e->getCode());
        echo "\n";
    }
    }
}
