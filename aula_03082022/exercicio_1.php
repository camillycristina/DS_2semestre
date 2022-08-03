<!-- Crie um programa que faça o fatorial de um número informado pelo usuário via formulario (POST).-->

<?php

$numero = $_POST['numero'];
$resultado = 1;

for($contador= $numero; $contador>1;$contador--){
    $resultado=$resultado*$numero;
    $numero--;
}
echo "O fatorial de $resultado. "
?>