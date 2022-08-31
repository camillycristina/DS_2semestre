<html>
  <head>
     <meta charset="utf-8">
 </head>
 <body>
    <div>
      <pre>
       <?php
       
         $vetor = [
            "nome" => "Emanuela",
            "rua" => "Rua dos 7anões",
            "peso" => "Meio quilo",
            "cidade" => "Itu"

        ];
        echo var_dump($vetor) . "</br></br>";

        ksort($vetor); //Ordena de forma crescente, usando a chave associativa
        echo var_dump($vetor) . "</br></br>";

        krsort($vetor); //Ordena de forma decrescente, usando a chave associativa
        echo var_dump($vetor);

        ?>
        </pre>
    </div>
 </body>
</html>