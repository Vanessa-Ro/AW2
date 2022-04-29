<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php  
      $numberM = $_POST["M"];
      $numberN = $_POST["N"];
      $Nerr = "";
      $Merr = "";
      $vetor[] = null; 


      if(empty($numberM) or strstr($nuymberM," ")){
       $Merr = "Campo Primeiro Número vazio! <br/><br/>";
       echo $Merr;
      
       }elseif(!is_numeric($numberM)){
       $Merr = "Campo Primeiro Número não numérico! <br/><br/>";
       echo $Merr;
      
       }elseif($numberM < 0){
       $Merr = "Número menor que zero! <br/><br/>";
       echo $Merr;
       }


       if(empty($numberN) or strstr($nuymberN," ")){
       $Nerr = "Campo Segundo Número vazio! <br/><br/>";
       echo $Nerr;
      
       }elseif(!is_numeric($numberN)){
       $Nerr = "Campo Segundo Número não numérico! <br/><br/>";
       echo $Merr;
      
       }elseif($numberN < 0){
       $Nerr = "Número menor que zero! <br/><br/>";
       echo $Nerr;
       }


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