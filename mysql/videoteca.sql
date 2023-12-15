CREATE DATABASE IF NOT EXISTS Videoteca;
USE Videoteca;

-- Creare la tabella degli Attori
CREATE TABLE IF NOT EXISTS attori (
    id_attori INT AUTO_INCREMENT PRIMARY KEY,
    nome_attori VARCHAR(50) NOT NULL,
    nazionalita VARCHAR(50),
    data_nascita DATE,
    data_morte DATE
);

-- Inserire alcuni dati nella tabella degli attori
INSERT INTO attori (id_attori, nome_attori, nazionalita, data_nascita, data_morte)
VALUES
    ('Jane Austen', 'Inglese', '1775-12-16', '1817-07-18'),
    ('George Orwell', 'Inglese', '1903-06-25', '1950-01-21'),
    ('Harper Lee', 'Americana', '1926-04-28', '2016-02-19');

-- Verifico il corretto inserimento dei dati
SELECT * FROM attori;

CREATE TABLE IF NOT EXISTS film (
    id_film INT AUTO_INCREMENT PRIMARY KEY,
    nome_film VARCHAR(50) NOT NULL
);



