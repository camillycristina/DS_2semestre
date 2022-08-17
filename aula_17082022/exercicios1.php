<!-- Faça um programa que execute 2 chamadas de funções, para verificar se um número é positivo,negativo ou igual a zero-->

<?php

$operador="+";
 function somar($v1, $v2){
     $soma = $v1 + $v2;

     return "<h2>$soma</h2>";

 }
 echo "A soma é: " . somar(10,5); //1º Chamada da função

 if($operador== "+"){
     echo somar(50,10); //2º Chamada da função 
 }
 else{
     echo "Operador inválido"
 }

?>