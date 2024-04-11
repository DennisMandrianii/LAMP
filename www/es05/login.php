<?php

//require 'functions.php';
// Costanti per la connessione al database

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ES05_user');
define('DB_PASSWORD', 'mia_password');
define('DB_NAME', 'ES05');

$html_form = <<<FORM
<form action="login.php" method="post">
  <label>Email <input type="text" name="email" /></label><br />
  <label>Password <input type="password" name="password"/></label><br />
  <input type="submit" value="Login" /><input type="reset" value="Cancel" />
</form>
<p>Non hai un account? <a href="register.php">Registrati adesso</a>.</p>     
FORM;

session_start(); // Avvia la sessione php.

$ispostrequest = $_SERVER['REQUEST_METHOD'] == 'POST';
$email = $_POST['email']?? "";
$password = $_POST['password'] ?? "";


echo "-".$email."-".$password."-"; 

//TODO: debug only
//list($retval,$errmsg)=login($email, $password);
//if($retval) {header("location: welcome.php"); die();} 

if ($ispostrequest) 
{
  //controlliamo le credenziali inserite con i dati presenti nel db
  //Ci connettiamo al db mysql
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  // Verifica della connessione
  if (!$conn) {die("Connessione fallita: " . mysqli_connect_error());}

  //echo "Connessione al database riuscita";
  // ... Puoi eseguire le tue query qui ...

  // Chiudere la connessione quando non è più necessaria
  mysqli_close($conn);
} 
else
 {
  $html = "<p>$errmsg</p>";
  $html .= $html_form;
}

?>
<html>
<head><title>Login</title></head>
<body>
  <h3>Pagina di login</h3>
  <?=$html?>
</body>
</html>


