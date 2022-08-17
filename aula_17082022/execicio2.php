<!-- Faça um programa que o usuário faça 3 chamadas de funções, e para cada chamada,verifique se o valor é par ou impar, e também fazer o fatorial-->

<?php

function  valor($n){
     
    if($n%2==0){
        echo "Seu número é par" . "<br>";
    }
    elseif($n%2==1){
        echo "Seu número é impar" . "<br>";
    }
    else {
        echo "Seu número é igual a zero". "<br>";
    }

    $resultado = 1;
    for($cont = $n; $cont > 1; $cont--){
        $resultado = $resultado * $n; //5 * 4 * 3 * 2 * 1
        $n--; // 5 4 3 2 1
    }
    echo "O fatorial é $resultado" . "</br>";
}


echo valor(5); 
echo valor(10); 
echo valor(2); 

?>