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
        
        echo var_dump($frutas)."</br></br>";
        echo var_dump($legumes)."</br></br>";
        echo var_dump($alimentos)

        ?>
        </pre>
    </div>
 </body>
</html>