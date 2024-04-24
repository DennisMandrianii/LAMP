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
    nomeprogetto varchar(20) NOT NULL
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
VALUES('dennia', 'assistente', '11000', '2004-08-13', '5');

INSERT INTO Progetti(codiceP, nomeprogetto)
VALUES(NULL, 'prototipo');

INSERT INTO contratto(id_contratto)
VALUES(NULL);

-- 1. Produrre un elenco di cognomi di tutti i dipendenti aventi stipnedio 10k/20k
Select cognome
from Dipendenti
where stipendio > 10000 AND stipendio < 20000
order by cognome;

-- 2. Produrre l'elenco nomeprogetto - cognome dipendente ordinato su nomeprogetto
Select nomeprogetto, cognome
from Dipendenti as D, contratto as C, Progetti as P
where D.id_dipendenti = C.id_dipendenti AND C.codiceP = P.codiceP
order by nomeprogetto, cognome;

--Select distinct(ruolo)
--from Dipendenti as D
--join contratto as C on
--D.id_dipendenti = C.id_dipendenti
--where C.codiceP = 6;

-- 3. Visualizzare i nomi dei diversi ruoli senza ripetizioni dei Dipendenti
Select distinct(ruolo)
from Dipendenti;

-- 4. Visualizzato il cognome seguito dall'età attuale(anni) di ogni dipendente
SELECT cognome, YEAR(CURRENT_DATE) - YEAR(nascita) AS eta
FROM Dipendenti;

-- 5. Visualizzare il cognome di tutti i dipendenti la cui seconda lettera sia e e ultima a
Select cognome
from Dipendenti
where cognome like '_e%a';

-- 6. Visualizzare il cognome di ogni dipendente seguito dal cognome del suo diretto superiore


-- 7. Visualizzare cognomi dipendenti che non sono mai stati assegnati ad un progetto


-- 8. Per ogni ruolo(dipendenti) si visualizzano quanti dipendenti hanno quel ruolo/media/max/min
Select count(*), AVG(stipendio), MAX(stipendio), MIN(stipendio)
from Dipendenti
group by ruolo;

-- 9. Per ogni progetto visualizzare il nome progetto e quanti dipendenti sono associati al progetto(min 5)

-- 10. Si visualizzi il cognome del dipendente che ha lo stipendio più alto
SELECT cognome
FROM Dipendenti
WHERE stipendio = (SELECT MAX(stipendio) FROM Dipendenti);