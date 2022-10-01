<?php // controleur de la page professeur
$Oprof = new Professeur(isset($_SESSION["profID"]) ? $_SESSION["profID"] : 1);

$this->setCSS("professeur");

$this->setSection($Oprof->AfficherProfil());

$this->setNav(Professeur::AfficherMenu());

$this->setFooter("professeur");
$this->setView("doctype.html");
