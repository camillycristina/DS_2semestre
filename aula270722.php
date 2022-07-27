<!-- Estrutura de repetição-FOR
O for é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem ser executadas.
Sintaxe:
for(expressão1,expressão2,expressão3){
    //código
}
-->

<?php

//Contador de 0 a 10
//for significa Para
/*
expressão 1 - variável
expressão 2 - condição
expressão 3 - incremento ou decremento
*/

for($contador = 0; $contador <=10; $contador++){
    echo $contador."</br>";
}

?>