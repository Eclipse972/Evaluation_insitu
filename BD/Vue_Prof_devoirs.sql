-- Liste des devoirs par prof
DROP VIEW IF EXISTS Vue_Prof_devoirs;
CREATE VIEW Vue_Prof_devoirs AS
SELECT profID, nom, Devoir.ID
FROM Prof_Devoir
INNER JOIN Devoir ON Devoir.ID=Prof_Devoir.devoirID
ORDER BY profID, nom;
