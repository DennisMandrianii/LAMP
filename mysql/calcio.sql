create database calcio;
use calcio;


create table squadra
(
    nome_squadra VARCHAR(20),
    id_squadra INT AUTO_INCREMENT PRIMARY KEY
);


create table calciatori
(
    cognome varchar(20) NOT NULL,
    ruolo INT NOT NULL,
    stipendio INT NOT NULL,
    nascita DATE NOT NULL,
    id_calciatore INT AUTO_INCREMENT PRIMARY KEY,
    capitano_della_squadra INT,
    id_squadra INT,
    FOREIGN KEY(id_squadra) REFERENCES squadra(id_squadra)
);


create table valutazioni
(
    voto INT NOT NULL,
    data_partita DATE NOT NULL,
    id_voto INT AUTO_INCREMENT PRIMARY KEY,
    id_calciatore INT,
    FOREIGN KEY(id_calciatore) REFERENCES calciatori(id_calciatore)
);


-- Query per ottenere il cognome di ogni calciatore
--SELECT cognome
--FROM calciatori;


-- 1. Modificare nella tabella calciatori il campo ruolo che sia di tipo string
alter table calciatori
change ruolo ruolo varchar(20);


-- 2. Inserire un'istanza nella tabella calciatore
INSERT INTO calciatori(id_calciatore, cognome, ruolo, stipendio, nascita, capitano_della_squadra, id_squadra) VALUES
(NULL,'Blu', 'attaccante', 1001, '2004-08-13', 5, NULL),
(NULL,'Bianchi', 'attaccante', 1002, '2004-08-13', 5, NULL),
(NULL,'Giallo', 'terzino', 1003, '2004-08-13', 5, NULL),
(NULL,'Naro', 'portiere', 1004, '1999-08-13', 5, NULL);


Select * from calciatori;


-- 3. Modificare nella tabella calciatori il cognome Rossi con Bianchi in tutte le istanze
UPDATE calciatori SET cognome = 'Bianchi' where cognome = 'Rossi';


-- 4. Cancellare nella tabella squadre l'istanza con nome squadra uguale a Verdi
DELETE from squadra where nome_squadra = 'Verdi';


-- 5. Produrre un elenco con i cognomi di tutti i calciatori aventi stipendio maggiore 10000 ordinato sul cognome
Select cognome
from calciatori
where stipendio > 1000
Order by cognome;


-- 6. Visualizzare tutte le informazioni dei calciatori che ricoprono il ruolo di terzino o di portiere
select * from calciatori
where ruolo = 'terzino' OR ruolo = 'portiere';


-- 7. Visualizzare il cognome di tutti i calciatori la cui 2° lettera del cognome e' 'a' e l'ultima lettera é la 'o'
select  cognome from calciatori
where cognome like '_a%o';


-- Inserimento di alcune squadre nel database
INSERT INTO squadra (nome_squadra) VALUES
('Napoli'),
('Verona'),
('Bologna');


-- 8. Produrre un elenco con i cognomi dei calciatori seguiti dal nome delle loro squadra solo per le squadre Napoli, verona, bologna (join, con where e in)
SELECT calciatori.cognome, squadra.nome_squadra
FROM calciatori
JOIN squadra ON calciatori.id_squadra = squadra.id_squadra
WHERE squadra.nome_squadra IN ('Napoli', 'Verona', 'Bologna');


-- 9. Visualizzare quanti calciatori sono nati prima del 2000
select count(*) from calciatori
where year(nascita) < 2000;


--select * from calciatori
--where year(nascita) < 2000;


insert into valutazioni(voto, data_partita, id_calciatore)
values (4, '2024-08-13', 1), (2,'2024-08-13', 2);


-- 10.  Visualizzare solo una volta, in ordine crescente, tutti i voti presenti nella tabella valutazioni
select distinct(voto)
from valutazioni
order by  voto  ASC;


-- 11. Visualizzare il voto più alto, il più basso e la media di tutti i voti della tabella valutazioni
select MAX(voto), MIN(voto), AVG(voto)
from valutazioni;


-- 13. Visualizzare il cognome di ogni calciatore seguito dal cognome del suo Capitano
SELECT calciatore.cognome
FROM calciatori
WHERE calciatori.id_calciatore = calciatori.capitano_della_squadra;


-- 14. Visualizzare i nomi delle squadre che non hanno calciatori
SELECT nome_squadra
FROM squadra
WHERE id_squadra NOT IN (SELECT DISTINCT id_squadra FROM calciatori);

