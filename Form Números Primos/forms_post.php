<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php  
      $numberM = $_POST["M"];
      $numberN = $_POST["N"];
      $vetor[] = null; 

      for($i = 0; $i <= $numberM; $i++){
        $vetor[$i] = rand(0, 100);
      }

       foreach($vetor as $valor){
        if($valor > 1 && ($valor % 2 != 0 || $valor == 2)){
          if($valor % 3 != 0 && $valor % 5 != 0 && $valor % 7 != 0){
            if($valor % $valor == 0){
                if($numberN >= 1){
                  echo "$valor <br>";
                  $numberN--;
              }
            }
          }
        }
      }
    ?> 
  </body>
</html>