<?php
    $num1 = 0;
    $num2 = 0;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//Fim do Método

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//Fim do Método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//Fim do Método

    function dividir($num1, $num2){
        if($num2 > 0){
            return $num1 / $num2;
        }else{
            return "Impossível dividir por zero!";
        }
    }//Fim do Método

    function mostrarNumeros($num1, $num2){
        $resultado = "";
        for($i = $num1; $i <= $num2; $i++){
            $resultado .= "\n".$i;
        }//Fim do For
        return $resultado;
    }//Fim do Método

    function exercicioUm($num){
        if($num > 0){
            return "positivo";
        }else if($num < 0){
            return "negativo";
        }else{
            return "zero";
        }
    }//Fim do Método

    function exercicioDois($num){
        $resultado = ""; #Variavel String
        for($i = 0; $i <= 10; $i++){
            $resultado .= "\n".$num." * ".$i." = ".($num * $i);
        }
        return $resultado;
    }//Fim do Método

    function exercicioTres($num){
        $resultado = 1;
        for($i = $num; $i > 1; $i--){
            $resultado *= $i;
        }
        return $resultado;
    }//Fim do Método


?>