<html>                                           
<head>                                          
    <title> PAGINA RISERVATA </title>       
</head>
<body>
    <h1> CONTROLLO CREDENZIALI </h1>
<?php                                         
    $usr =  $_POST["username"];                        
    $pwd =  $_POST["password"];  

    if($usr != "dennis" || $pwd != 'ciao')    //controllo delle credenziali
    {
        echo"<h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE </h1><br>";
        session_start();
        
        if(isset($_SESSION['username'])) 
        {
            header('Location: login.php');
            exit();
        }
        if(isset($_SESSION['password'])) 
        {
            header('Location: login.php');
            exit();
        }
    }
    else                                        //se credenziali corrette
    {
    echo "<h1> Benvenuto " .$usr. "</br> Nell'area riservata del sito </h1>";
    echo "<h1> le tue credenziali inserite sono </br> username: " .$usr."</br> password:" .$pwd. "</br> la ringraziamo e buona giornata! </h1>";  
?>
    <a href = "logout.php"> pagina di logout</a>
<?php 
    }
?>
</body>
</html>

