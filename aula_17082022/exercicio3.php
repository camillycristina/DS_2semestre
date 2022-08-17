<!-- Faça uma função que receba dois parâmetros, de salário de porcentagem de aumento do salario. Faça três chamadas de função, e a partir do salario porcentagem de aumento,calcule novo salario, e ao final mostre: salario,porcentagem de aumento,valor do aumento e novo salario.  -->
<?php

function salario($salario, $porcentagem){
    $aumento= $salario * ($porcentagem/100);
    $salario_novo = $aumento + $salario;
    echo "O salario antigo é: $salario" . "<br></br>";
    echo "O aumento tem uma porcentagem de: $porcentagem" . "<br></br>";
    echo "O valor do aumento é: $salario_novo" . "<br></br>";
}

salario(1000,10);
salario(1000,20);
salario(1000,30);

?>