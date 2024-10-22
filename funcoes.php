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

    function exercicioQuatro($num1, $num2){
        $resultado = "";
        Sqrt($num1);
        Pow($num1, $num2);
        $resultado = "Raiz: ".sqrt($num1)."\nPotência: ".pow($num1, $num2);
        return $resultado;
    }//Fim do Método

    function exercicioCinco($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Ímpar";
        }
    }//Fim do Método

    function exercicioSeis($num1, $num2){
        if($num1 > $num2){
            return "$num2 e $num1";
        }else{
            return "$num1 e $num2";
        }
    }//Fim do Método

    function exercicioSete($num1, $num2){
        return ($num1 + $num2)/2;
    }//Fim do Método

    function exercicioOito($str){
        $cont = strlen($str);
            $contar = 0;
            $verificar = "";
            for($i = 0; $i < $cont; $i++){
                $verificar = substr($str, $i, 1);
                if(($verificar == 'a') || ($verificar == 'e') || ($verificar == 'i') || ($verificar == 'o') ||($verificar == 'u')){
                        $contar++;
                }
            }//Fim do For
            return "\nExistem ".$contar." vogais na palavra!";
    }//Fim do Método

    function exercicioDez($num){
        if ($num == 2 or $num == 3 or $num == 5){
            return "é primo";
        }else if ($num % 2 != 0 and $num % 3 != 0 and $num % 5 != 0){
                return "é primo";
        }else{
            return "não é primo";
        }
    }//Fim do Método

    function exercicioOnze($num1, $num2){
        $num1 = "";
        $num2 = "";
        $num3 = ($num1 + $num2)*$num1;
        return $num3;
    }//Fim do Método
 
    function exercicioDoze($num1, $num2, $num3){
        $val1 ="";
        $val2 ="";
        $val3 ="";
        $media = ($val1 + $val2 + $val3)/3;
        return $media;
    }//Fim do Método
 
    function exercicioTreze($num){
        $valor = "";
        $porcentagem = 15;
        $resultado = $valor*($porcentagem/100);
        return  $resultado;
    }//Fim do Método
 
    function exercicioQuatorze($num1, $num2){
        $numD = "";
        $porcentagemCinco = 5;
        $porcentagemCinquenta = 50;
        $resultado1 = $numD*($porcentagemCinco/100);
        $resultado2 = $numD*($porcentagemCinquenta/100);
        return $resultado1;
        return $resultado2;
    }//Fim do Método
 
    function exercicioQuinze($num1, $num2){
        $primeiroN = "";
        $SegundoN = "";
        $quad1 = $primeiroN * $primeiroN;
        $quad2 = $SegundoN * $SegundoN;
        $resultado = $quad1 + $quad2;
        return $resultado;
    }//Fim do Método

    function exercicioDezesseis($num1){
        $km = "";
        $velocidade = $km * 0,001;
        return $velocidade;
    }//Fim do Método
 
?>