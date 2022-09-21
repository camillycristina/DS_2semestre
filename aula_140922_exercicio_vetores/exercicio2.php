<!-- Crie um vetor de 5 posições de números inteiros ordene as posições pelas chaves em ordem crescente, faça um laço de repetição onde você deve fazer o quadrado de cada valor contido no vetor, e criar um novo vetor com os novos valore.Mostre na tela todas as informações possiveis -->

<?php

$vetor1 =[2,5,3];
$vetor=[];

echo var_dump($vetor1) . "</br>";


asort($vetor1); //Ordena de forma crescente
echo var_dump($vetor1)."</br>";

for($i = 0; $i<count($vetor1); $i++){
    $vetor[] = $vetor1[$i] * $vetor1[$i];
}
  
echo var_dump($vetor);
?>
