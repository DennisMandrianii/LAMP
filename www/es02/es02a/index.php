<html>                                           
<head>                                          
    <title> I MIEI DATI</title>       
</head>
<body>
    <h1> Controllo delle Credenziali </h1>
<?php                        
    $usr = $_POST["username"];                        
    $pwd = $_POST["password"];                        
    if($usr != "Dennis" || $pwd != "Ciao")           
    {
?>
    <h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE <h1><br>
<?php
    }
else                                     
{
    echo "<h1> Benvenuto " .$usr. "</br> nell' area riservata del sito </h1>";
    echo "<h1> Le tue credenziali sono: </br> username: " .$usr."</br>password: " .$pwd. "</h1>";
}
?>
</body>
</html>