-- DROP DATABASE IF EXISTS ES05;
CREATE DATABASE IF NOT EXISTS ES05;
USE ES05;
SHOW DATABASES;

-- DROP USER IF EXISTS ES05_user
CREATE USER IF NOT EXISTS ES05_user@localhost IDENTIFIED BY 'mia_password';
GRANT SELECT, INSERT, UPDATE, DELETE ON ES05.* TO ES05_user@localhost;
SELECT user FROM mysql.user;
SHOW GRANTS FOR ES05_user@localhost;

-- DROP TABLE IF EXISTS utente;
CREATE TABLE IF NOT EXISTS utente (
  UserID INT NOT NULL AUTO_INCREMENT ,
  Username VARCHAR(64) NOT NULL UNIQUE,
  Password VARCHAR(64) NOT NULL ,
  PRIMARY KEY (UserID)
) ENGINE=InnoDB AUTO_INCREMENT=1000;
SHOW TABLES;
SHOW CREATE TABLE utente;

INSERT INTO utente (UserID, Username, Password 
) VALUES (NULL, 'utente', 'prova');

INSERT INTO utente VALUES 
(NULL, 'mrossi', '123'),
(NULL, 'admin', 'admin');

SELECT * FROM utente;



--LOGIN 
--<?php

--//require 'functions.php';
--// Costanti per la connessione al database

--define('DB_SERVER', 'localhost');
--define('DB_USERNAME', 'ES05_user');
--define('DB_PASSWORD', 'mia_password');
--define('DB_NAME', 'ES05');

--session_start();

--// Recupera le credenziali dalla richiesta POST
--$username = $_POST['username'] ?? "";
--$password = $_POST['password'] ?? "";

--// Connessione al database
--$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
--// Verifica della connessione
--if (!$conn) {die("Connessione fallita: " . mysqli_connect_error());}

--echo "Connessione al database riuscita<br>";

--// Esegui la query per verificare le credenziali dell'utente
--$query = "SELECT * FROM utente WHERE Username = '$username' AND Password = '$password';";
--$result = mysqli_query($conn, $query);
--echo $query."<br>";

--// Verifica se la query ha restituito risultati
--if (mysqli_num_rows($result) > 0)
--{
 --   echo "Login riuscito. Benvenuto!"; // L'utente è autenticato con successo
--} else 
--{
 --   echo "Credenziali non valide. Riprova."; // L'utente non è autenticato
--}

--// Chiudi la connessione al database
--mysqli_close($conn);
--?>

--<!DOCTYPE html>
--<html>
--<head>
    --<title>Login</title>
--</head>
--<body>
    --<h3>Pagina di login</h3>
   -- <?=$errmsg?>
    --<h4>Credenziali:</h4>
    --<h4>username: admin</h4>
    --<h4>password: admin</h4>

    --<form method="POST" action="">
      --  <label for="username">Nome utente:</label>
       -- <input type="text" name="username" required><br><br>

      --  <label for="password">Password:</label>
      --  <input type="password" name="password" required><br><br>

       -- <input type="submit" value="Accedi">
   -- </form>
--</body>