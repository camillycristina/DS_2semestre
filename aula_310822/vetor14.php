<html>
  <head>
     <meta charset="utf-8">
 </head>
 <body>
    <div>
      <pre>
       <?php
        $frutas = ["Maçã", "Laranja","Limão"];
        $legumes = ["Batata" , "Abóbora" ,"Cenola"];
        $alimentos = array_merge($frutas,$legumes); //Faz junção de dois ou mais vetores
        
        foreach ($alimentos as $novo){ //percorre todas as posições do vetor
           echo "<h2>$novo</h2></br>";
        }

        ?>
        </pre>
    </div>
 </body>
</html>