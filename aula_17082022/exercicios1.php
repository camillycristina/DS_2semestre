<!-- Faça um programa que execute 2 chamadas de funções, para verificar se um número é positivo,negativo ou igual a zero-->

<?php

 function  verificar($n){
     
    if($n>0){
        echo "Seu número é positivo";
    }
    elseif($n<0){
        echo "Seu número é negativo";
    }
    else {
        echo "Seu número é igual a zero";
    }
}

echo somar(0);

?>