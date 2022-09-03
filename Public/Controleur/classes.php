<?php

$profID = isset($_SESSION["profID"]) ? $_SESSION["profID"] : 1;

// création de la liste des liens vers les classes
$ReponseSQL = PEUNC\BDD::SELECT("nom FROM Vue_Prof_groupes WHERE profID = ?", [$profID]);

switch(PEUNC\BDD::SELECT("count(*) FROM Vue_Prof_groupes WHERE profID = ?", [$profID]))
{	// cette partie est factorisable pour créer les listes pour les devoirs, les référentiels, ...
	case 0:		// aucune réponse
		$code = "";
		break;
	case 1:		// réponse unique
		$code = "<a href=#>{$ReponseSQL}</a>\n";
		break;
	default:	// construction de la liste
		$code = "";
		foreach($ReponseSQL as $valeur)	$code .= "<a href=#>{$valeur["nom"]}</a>\n";
}

// construction de la page
$this->setSection("<h1>Choisissez ...</h1>\n<p><a href=/professeur>ou revenir en arri&egrave;re</a></p>\n");

$this->setNav($code . "<a href=#>Cr&eacute;er</a>\n" . "<a href=#>Ajouter</a>\n");

$this->setFooter("");
$this->setView("doctype.html");
