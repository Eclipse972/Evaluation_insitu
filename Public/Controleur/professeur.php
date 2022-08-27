<?php // controleur de la page professeur
$Oprof = new Professeur(isset($_SESSION["profID"]) ? $_SESSION["profID"] : 1);

$this->setCSS(["professeur"]);
// $essai = PEUNC\BDD::SELECT("pseudo_ FROM Utilisateur WHERE ID = ?", [$profID]);

$this->setSection(	$Oprof->AfficherProfil()
				.	$Oprof->AfficherClasses()
				.	$Oprof->AfficherDevoirs()
				.	$Oprof->AfficherCompetences()
				.	$Oprof->AfficherEvaluations()
			);

$this->setNav(Professeur::AfficherMenu());

$this->setFooter("professeur");
$this->setView("doctype.html");
