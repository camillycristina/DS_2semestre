<!-- criar tabela de 10 linha e 5 coluna-->

<body>
    <div>
<?php

echo "<table border = 1>";

for($linha=1; $linha<=10; $linha++){
    echo "<tr>";
    for($coluna=1; $coluna<=5; $coluna++){
        echo "<td>Texto</td>";
    }
    echo "</tr>";
}
echo"</table>";

?>
   </div>
</body>
