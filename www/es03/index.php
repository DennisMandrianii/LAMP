<?php
// Inizializza le variabili per immagazzinare gli errori
$nomeError = $cognomeError = $nascitaError = $codiceFiscaleError = $emailError = $prefissoError = $numeroError = $viaError = $capError = $comuneError = $provinciaError = $nicknameError = $passwordError = "";
$nome = $cognome = $nascita = $codice_fiscale = $email = $prefisso = $numero = $via = $cap = $comune = $provincia = $nickname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Validazione del campo Nome
    if (empty($_POST["nome"])) 
    {
        $nomeError = "Il campo Nome è obbligatorio";
    } 
    else 
    {
        $nome = test_input($_POST["nome"]);
    }

    // Validazione del campo Cognome
    if (empty($_POST["cognome"])) 
    {
        $cognomeError = "Il campo Cognome è obbligatorio";
    } 
    else 
    {
        $cognome = test_input($_POST["cognome"]);
    }

    // Validazione del campo nascita
    if (empty($_POST["nascita"])) 
    {
        $nascitaError = "Il campo nascita è obbligatorio";
    } 
    else 
    {
        $nascita = test_input($_POST["nascita"]);
    }

    // Validazione del campo Codice Fiscale
    if (empty($_POST["codice_fiscale"])) 
    {
        $codiceFiscaleError = "Il campo Codice Fiscale è obbligatorio";
    } 
    else 
    {
        $codice_fiscale = test_input($_POST["codice_fiscale"]);
    }

    // Validazione del campo Email
    if (empty($_POST["email"])) 
    {
        $emailError = "Il campo Email è obbligatorio";
    } 
    else 
    {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
        {
            $emailError = "Formato email non valido";
        } else 
        {
            $email = test_input($_POST["email"]);
        }
    }

    // Validazione del campo Prefisso
    if (empty($_POST["prefisso"])) 
    {
        $prefisso = "";
    } else 
    {
        $prefisso = test_input($_POST["prefisso"]);
    }

    // Validazione del campo Numero
    if (empty($_POST["numero"])) 
    {
        $numeroError = "Il campo Numero è obbligatorio";
    } 
    else 
    {
        $numero = test_input($_POST["numero"]);
    }

    // Validazione del campo Via
    if (empty($_POST["via"])) 
    {
        $viaError = "Il campo Via è obbligatorio";
    } 
    else 
    {
        $via = test_input($_POST["via"]);
    }

    // Validazione del campo CAP
    if (empty($_POST["cap"])) 
    {
        $capError = "Il campo CAP è obbligatorio";
    } 
    else 
    {
        $cap = test_input($_POST["cap"]);
    }

    // Validazione del campo Comune
    if (empty($_POST["comune"])) 
    {
        $comuneError = "Il campo Comune è obbligatorio";
    } 
    else 
    {
        $comune = test_input($_POST["comune"]);
    }

    // Validazione del campo Provincia
    if (empty($_POST["provincia"])) 
    {
        $provinciaError = "Il campo Provincia è obbligatorio";
    } 
    else 
    {
        $provincia = test_input($_POST["provincia"]);
    }

    // Validazione del campo Nickname
    if (empty($_POST["nickname"])) 
    {
        $nicknameError = "Il campo Nickname è obbligatorio";
    } 
    else 
    {
        $nickname = test_input($_POST["nickname"]);
    }

    // Validazione del campo Password
    if (empty($_POST["password"])) 
    {
        $passwordError = "Il campo Password è obbligatorio";
    }
    else 
     {
        $password = test_input($_POST["password"]);
        
        if ($nickname != "Dennis" || $password != "Ciao") 
        {
            echo "<h1> ATTENZIONE NOME UTENTE O PASSWORD SONO ERRATE </h1><br>";
        } 
        else 
        {
            echo "<h1> Benvenuto " . $nickname . " nell'area riservata del sito </h1>";
            echo "<h1> Le tue credenziali sono: </h1><br>";
            echo "<p>Username: " . $nickname . "</p><br>";
            echo "<p>Password: " . $password . "</p>";
        }
    }
}

// Funzione per pulire e proteggere i dati
function test_input($data)
 {
    $data = trim($data);
    $data = stripslashes($data); //elimina da una stringa il carattere backslash (\) 
    $data = htmlspecialchars($data); //la stringa è interpretata da tutti i browser, indipendentemente dalla lingua e dal font di caratteri utilizzati dal computer client.
    return $data;
}
?>

<!--Questo codice visualizzerà il contenuto della variabile PHP 
    $nomeError all'interno di un elemento HTML <span> con la classe "error".
    La classe "error" potrebbe essere utilizzata per applicare stili CSS specifici al messaggio di errore,
    ad esempio per evidenziarlo in rosso o con un tipo di carattere diverso.-->

<html>
<head>
    <title> I MIEI DATI </title>
</head>
<body>
    <h1> INSERISCI I DATI </h1>
    <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label> Inserisci Nome: </label><br>
        <input name = "nome" id = "nome" type = "text" placeholder = "Nome">
        <span class = "error"><?php echo $nomeError;?></span><br>

        <label> Inserisci Cognome: </label><br>
        <input name = "cognome" id = "cognome" type = "text" placeholder = "Cognome">
        <span class = "error"><?php echo $cognomeError;?></span><br>

        <label> Inserisci Data di Nascita: </label><br>
        <input name = "nascita" id = "nascita" type = "text" placeholder = "nascita">
        <span class = "error"><?php echo $nascitaError;?></span><br>

        <label> Inserisci il Codice Fiscale: </label><br>
        <input name = "codice_fiscale" id = "codice_fiscale" type = "text" placeholder = "Codice Fiscale">
        <span class = "error"><?php echo $codiceFiscaleError;?></span><br>

        <label> Inserisci Email: </label><br>
        <input name = "email" id = "email" type = "text" placeholder = "Email">
        <span class = "error"><?php echo $emailError;?></span><br>

        <label> Inserisci Numero: </label><br>
        <select name = "prefisso" id = "prefisso"> <!-- Comando per i prefissi a tendina: -->
            <option value = ""> Seleziona un prefisso </option>
            <option value = "+1"> +1 (USA) </option>
            <option value = "+44"> +44 (Regno Unito) </option>
            <option value = "+39"> +39 (Italy) </option>
        </select>
        <input name = "numero" id = "numero" type = "text" placeholder = "Numero">
        <span class = "error"><?php echo $numeroError;?></span><br>

        <label> Inserisci Via: </label><br>
        <input name = "via" id = "via" type = "text" placeholder = "Via">
        <span class = "error"><?php echo $viaError;?></span><br>

        <label> Inserisci CAP: </label><br>
        <input name = "cap" id = "cap" type = "text" placeholder = "CAP">
        <span class = "error"><?php echo $capError;?></span><br>

        <label> Inserisci Comune: </label><br>
        <input name = "comune" id = "comune" type = "text" placeholder = "Comune">
        <span class = "error"><?php echo $comuneError;?></span><br>

        <label> Inserisci Provincia: </label><br>
        <input name = "provincia" id = "provincia" type = "text" placeholder = "Provincia">
        <span class = "error"><?php echo $provinciaError;?></span><br>

        <label> Inserisci Nickname: </label><br>
        <input name = "nickname" id = "nickname" type = "text" placeholder = "Nickname">
        <span class = "error"><?php echo $nicknameError;?></span><br>

        <label> Inserisci Password: </label><br>
        <input name = "password" id = "password" type = "password" placeholder = "Password">
        <span class = "error"><?php echo $passwordError;?></span><br>

        <input type = "submit" value = "Invia">
    </form>
</body>
</html> 
