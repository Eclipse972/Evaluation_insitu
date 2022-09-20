<?php

$profID = isset($_SESSION["profID"]) ? $_SESSION["profID"] : 1;

$code = Collection::Liste("Vue_Prof_groupes", $profID);

// construction de la page
$this->setSection("<h1>Choisissez ...</h1>\n<p><a href=/professeur>ou revenir en arri&egrave;re</a></p>\n");

$this->setNav(Collection::Liste("Vue_Prof_groupes", $profID)
				. "<a href=#>Cr&eacute;er</a>\n"
				. "<a href=#>Ajouter</a>\n");

$this->setFooter("");
$this->setView("doctype.html");
