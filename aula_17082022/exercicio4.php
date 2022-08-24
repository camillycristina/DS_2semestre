<!--faça um programa para enviar dois valores para uma função atraves de duas chamadas, e mostrar todos os numeros impares e entre eles, em ordem decrecentes -->
<?php

function verificar($v1, $v2){
    if($v1 > $v2){
        while($v1 >= $v2){
            if($v1 % 2==1){
                echo $v1 . "</br>";
            }
            $v1--;
        }
    }
    else{
        while($v2 >= $v1){
            if($v2 % 2 == 1){
                echo $v2 . "</br>";
            }
            $v2--;
        }
    }
}
echo verificar(10, 52);