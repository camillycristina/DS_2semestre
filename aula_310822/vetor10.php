<html>
  <head>
     <meta charset="utf-8">
 </head>
 <body>
    <div>
      <pre>
       <?php
       /* $vetor = 
        "Ana Maria Braga",
        "Maria",
        "wesley",
         "gabriel",
         ]; */
         

         $vetor = [
        10,
        1,
        11,
        2,
        19
        ];

        echo var_dump($vetor) . "</br></br>";

        ksort($vetor); //Exibe o vetor em ordem crescente
        echo var_dump($vetor) . "</br></br>";

        krsort($vetor); //Exibe o vetor na ordem decresente
        echo var_dump($vetor);

        ?>
        </pre>
    </div>
 </body>
</html>