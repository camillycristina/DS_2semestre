<!-- Faça um programa que tenha dois vetores númericos de 3 posições cada, e um terceiro vetor vazio. De acordo com uma operação escolheida (+,-,*,/), faça o calculo entre os valores do 1º com o 2ºvetor, e preencha o 3ºvetor e mostra os três vetores. -->

<?php
   $vetor1 =[2,3,4];
   $vetor2 =[5,6,7];
   $vetor3 =[];
   $operacao = "+";

   for($i = 0; $i<count($vetor1); $i++){
       switch($operacao){
           case '+':
            $vetor3[] = $vetor1[$i] + $vetor2[$i];
               break;
            case '-':
            $vetor3[] = $vetor1[$i] - $vetor2[$i];
                break;
            case '*':
            $vetor3[] = $vetor1[$i] * $vetor2[$i];
                break;
            case '/':
            $vetor3[] = $vetor1[$i] / $vetor2[$i];
                break;
       }
   }
 echo var_dump($vetor1) . "</br></br>";
 echo var_dump($vetor2) . "</br></br>";
 echo var_dump($vetor3);


?>