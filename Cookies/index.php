<?php
    ob_start(); 
?>

<html>
  <head>
    <title>Formulário com Cookies</title>
    <style>
      form input {
        padding: 5px;
        margin: 5px 0 20px;
      }
    </style>
  </head>
  <body>
    
<?php
$array_value = array(
  'primeiro_nome' => $_POST['pri_nome'],
  'ultimo_nome' => $_POST['ult_nome'],
  'email' => $_POST['email'],
  'dt_nasc' => $_POST['dt_nasc'],
);

if(empty($_POST['acept_cookies'])){
  if(isset($_POST['acept_cookies'])){
    setcookie(
    $name = "cookie",
    $value = serialize($array_value),
    $expire = time() + (60*60*24*7)
    );
  }
?>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="pri_nome">Primeiro nome:</label>
  <input type="text" placeholder="Vanessa" name="pri_nome" required><br>
  
  <label for="ult_nome">Último nome:</label>
  <input type="text" placeholder="Cardoso" name="ult_nome" required><br>

  <label for="email">Email:</label>
  <input type="email" placeholder="seunome@gmail.com" name="email" required><br>

  <label for="dt_nasc">Data de nascimento:</label>
  <input type="date" placeholder="08/08/2003" name="dt_nasc" required><br>

  <input type="checkbox" name="acept_cookies">   
  <label for="acept_cookies">Aceito os cookies</label><br>
  
  <input type="submit">
</form>
    
<?php 
} else{
?>
  
  <h3>Bem vinde!!!</h3>
  
<?php 
  } ob_end_flush(); 
?>

