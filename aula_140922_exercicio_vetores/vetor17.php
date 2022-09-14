<?php

$a = ["verde", "vermelho", "azul", "roxo", "rosa"];
$b =["verde", "vermelho","roxo"];

$c = array_diff($a,$b); //traz apenas o que for diferente do 1ºvetor para os demais

print_r($c);
?>