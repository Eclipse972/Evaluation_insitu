-- Liste des référentiels par prof
DROP VIEW IF EXISTS Vue_Prof_referentiels;
CREATE VIEW Vue_Prof_referentiels AS
SELECT profID, nom, Referentiel.ID
FROM Prof_Referentiel
INNER JOIN Referentiel ON Referentiel.ID=Prof_Referentiel.referentielID
ORDER BY profID, nom;
