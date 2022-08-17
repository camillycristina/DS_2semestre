<!-- Uma função é é uma pequena rotina nomeada que permite que certo algoritimo seja reutilizado pela aplicação, garantindo que seu codigo não sera duplicado, e que sua manutenção sera feita em apenas um lugar.
Uma função efetua uma tarefa específica, possivelmente processando um conjunto de valores fornecidos a ela (parâmetros) e/ou retornando algum valor -->

<?php
$operador="+";
//Função
 function somar($v1, $v2){
     $soma = $v1 + $v2;

     return "<h2>$soma</h2>";

 }
 echo "A soma é: " . somar(10,5); //1º Chamada da função

 if($operador== "+"){
     echo somar(50,10); //2 Chamada da função 
 }
 else{
     echo "Operador inválido"
 }

 switch($operador){
     case '+':
        echo somar(99,1); //3 Chamada da função
        break;
        default:
        echo "Operador invalido!";
        break;
 }
 
?>