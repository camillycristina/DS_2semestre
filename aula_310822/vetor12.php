<html>
  <head>
     <meta charset="utf-8">
 </head>
 <body>
    <div>
      <pre>
       <?php
       $v = array(
         "Bob",
         13,
         "Bob",
         "Maria",
         33,
         false
       );
       echo var_dump($v) . "</br></br>";

       $v = array_unique($v); //Elimina informações repetidas
       echo var_dump($v);
       

        ?>
        </pre>
    </div>
 </body>
</html>