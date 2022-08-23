<?php
// contrôleur pour les erreurs serveur
$this->setHeaderText("Erreur serveur");
$this->setFooter("");
$this->setView("erreur.html");
$this->setCSS(array("erreur"));

$this->setCodeErreur($this->beta);

$this->setTitreErreur(PEUNC\BDD::SELECT("texteMenu FROM Squelette WHERE alpha=-1 AND beta= ? AND gamma = 0",[$this->beta]));

$this->setCorpsErreur("<p>Image &agrave; venir</p>");
