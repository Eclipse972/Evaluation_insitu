<?php
$this->setSection(Professeur::AfficherRubrique("G&eacute;rer ce petit monde", "Vue_Prof_groupes",
												isset($_SESSION["profID"]) ? $_SESSION["profID"] : 1));
$this->setNav("<a href=#>Cr&eacute;er</a>\n"
			. "<a href=#>Ajouter</a>\n"
			. "<a href=#>Modifier</a>\n"
			. "<a href=#>Supprimer</a>\n");

$this->setFooter("");
$this->setView("doctype.html");
