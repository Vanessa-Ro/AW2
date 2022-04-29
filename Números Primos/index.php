<html>
  <head>
    <title>Números Primos</title>
  </head>
  <body>
    <?php echo 
      
      $vetor[] = null; 
      for($i = 0; $i <= 99; $i++){
        $vetor[$i] = rand(0, 100);
      }

      echo "Números Primos: <br>";

      foreach($vetor as $valor){
        if($valor > 1 && ($valor % 2 != 0 || $valor == 2)){
          if($valor % 3 != 0 && $valor % 5 != 0 && $valor % 7 != 0){
            if($valor % $valor == 0){
              echo "$valor <br>";
            }
          }
        }
      }

    ?> 
  </body>
</html>