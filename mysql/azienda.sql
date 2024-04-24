create database azienda;
use azienda;

create table Dipendenti
(
    id_dipendenti INT AUTO_INCREMENT PRIMARY KEY,
    cognome varchar(20) NOT NULL,
    ruolo varchar(20) NOT NULL,
    stipendio INT NOT NULL,
    nascita DATE NOT NULL,
    codRespondabile INT NOT NULL
);

create table Progetti
(
    codiceP INT AUTO_INCREMENT PRIMARY KEY,
    nomeprogetto INT NOT NULL
);

create table contratto
(
    id_contratto INT AUTO_INCREMENT PRIMARY KEY,
    id_dipendenti INT,
    FOREIGN KEY(id_dipendenti) REFERENCES Dipendenti(id_dipendenti),
    codiceP INT,
    FOREIGN KEY(codiceP) REFERENCES Progetti(codiceP)
);

INSERT INTO Dipendenti(cognome, ruolo, stipendio, nascita, codRespondabile)
VALUES('dennis', 'assistente', '11000', '2004-08-13', '5');

Select cognome
from Dipendenti
where stipendio > 10000 AND stipendio < 20000
order by cognome;

