<?php
$usr = $_POST['username'] ?? '';
$pwd = $_POST['password'] ?? '';

?>
<html>
<head>
    <title> I MIEI DATI </title>
</head>
<body>
    <h1> INSERISCI LE TUE CREDENZIALI </h1>
<?php
    if($usr != 'dennis' || $pwd != 'ciao') 
    {
        echo"<h4> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE O NON INSERITI </h4><br>";
    }
    else 
    {
        session_start();
        $_SESSION['username'] = 'dennis';
        $_SESSION['password'] = 'ciao';
        $nrvisite = $_SESSION['NrVisite'] ?? 0;
        header('Location: riservata.php');
        exit();
    }
?>
    <form method = "POST" action = "riservata.php">
        <label> Inserisci l'username: </label><br>
        <input name = "username" id = "username" type = "text" placeholder = "username"><br>
        <label> Inserisci la password: </label><br>
        <input name = "password" id = "password" type = "password" placeholder = "password"><br>
        <input type = "submit" name = "submit">
    </form>
</body>
</html>
