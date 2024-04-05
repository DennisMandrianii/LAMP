​​<html>
<head>
    <title> I MIEI DATI </title>
</head>
<body>
    <h1> LE MIE CREDENZIALI </h1>
<?php
    if (isset($_POST['invio']))
    {
        if(isset($_POST['username']))
        {
            $usr = $_POST['username'];
        }
        if(isset($_POST['password']))
        {
            $pwd = $_POST["password"];
        }
        if($usr != "Dennis" && $pwd != 'Ciao')
        {
            echo "<h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE </h1><br>";
        }
    else
    {
        echo "<h1> Benvenuto " .$usr. "</br> nell'area riservata del sito </h1>";
        echo "<h1> Le credenziali sono: </br> username: ".$usr." </br>password: ".$pwd."</h1>";
    }
}
?>
    <form method = "POST" action = 'index.php'>
    <label> inserisci username: </label></br>
    <input name = "username" id = "username" type = "username" placeholder = "username"></br>
    <label> inserisci password: </label></br>
    <input name="password" id = "password" type = "password" placeholder = "password"></br>
    <input type = "submit" name= "invio">
</form>
</body>
</html>
