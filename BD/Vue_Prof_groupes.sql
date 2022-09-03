-- Liste des groupes par prof
DROP VIEW IF EXISTS Vue_Prof_groupes;
CREATE VIEW Vue_Prof_groupes AS
SELECT profID, nom, Groupe.ID
FROM Prof_Groupe
INNER JOIN Groupe ON Groupe.ID=Prof_Groupe.groupeID
ORDER BY profID, nom;
