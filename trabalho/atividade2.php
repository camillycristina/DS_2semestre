<!-- CRIE DOIS VETORES, CADA UM COM CAPACIDADE PARA ARMAZENAR 10 NÚMEROS. O PROGRAMA DEVERÁ MOSTRAR AS 4 OPERAÇÕES FUNDAMENTAIS DA MATEMÁTICA SOBRE OS DADOS DOS VETORES, EM CADA UM DE SUAS RESPECTIVAS POSIÇÕES. EX. VETOR_A[0] * VETOR_B[0] E ASSIM POR DIANTE. AO FINAL, ORDENE TODOS OS VETORES EM ORDEM DECRESCENTE, ADICIONE UM VALOR NO FINAL DO PRIMEIRO VETOR E UM VALOR NO FINAL DO SEGUNDO VETOR, E FAÇA A MULTIPLICAÇÃO APENAS DOS VALORES DESSA NOVA POSIÇÃO, E MOSTRE NA TELA. -->
<?php
   $vetor1 =[1,2,3,4,5,6,7,8,9,10];
   $vetor2 =[1,2,3,4,5,6,7,8,9,10];
   $vetor3 =[];
   $vetor4=[];
   $vetor5=[];
   $vetor6=[];

   arsort($vetor1);
   arsort($vetor2); //Exibe o vetor na ordem decresente
  

   for($i = 0; $i<count($vetor1); $i++){
       
           
            $vetor3[] = $vetor1[$i] + $vetor2[$i];
               
            $vetor4[] = $vetor1[$i] - $vetor2[$i];
              
            $vetor5[] = $vetor1[$i] * $vetor2[$i];
               
            $vetor6[] = $vetor1[$i] / $vetor2[$i];

       }
       arsort($vetor3);
   

   array_push($vetor1, 12);
   array_push($vetor2, 12);
        

 echo var_dump($vetor1) . "</br></br>";
 echo var_dump($vetor2) . "</br></br>";
 echo var_dump($vetor3). "</br></br>";
 echo var_dump($vetor4) . "</br></br>";
 echo var_dump($vetor5) . "</br></br>";
 echo var_dump($vetor6);



?>