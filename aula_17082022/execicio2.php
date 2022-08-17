<!-- Faça um programa que o usuário faça 3 chamadas de funções, e para cada chamada,verifique se o valor é par ou impar, e também fazer o fatorial-->

<?php

$chamada="+";
 function valor($v1, $v2){
     $valor = $v1 + $v2;

     return "<h2>$valor</h2>";

 }
 echo "A soma é: " . valor(10,5); //1º Chamada da função

 if($chamada== "+"){
     echo valor(50,10); //2º Chamada da função
 }
 else{
     echo "Operador inválido"
 }

 switch($chamada){
    case '+':
       echo valor(99,1); //3º Chamada da função
       break;
       default:
       echo "Operador invalido!";
       break;
}

?>