<!--Crie um programa que faça a tabuada de 1 a 10, deixando o usuário escolher através da caixa de seleção a tabuada a ser gerada. -->

<?php

$n = $_POST['numero'];

for($numero=1; $numero<=10; $numero++){
    $r=$n*$numero;
    echo "$n * $numero = $r </br>";
}

?>