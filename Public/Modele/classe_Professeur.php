<?php
class Professeur extends PEUNC\User
{
	public function __construct($profID = 1)
	{	// hydratation
		$this->ID = $profID;
		// list($pseudo, $nom, $prenom, $courriel) = ... à partir de PHP7
		$Treponse = PEUNC\BDD::SELECT("pseudo, nom, prenom, courriel FROM Utilisateur WHERE ID = ?", [$profID]);
		if (isset($Treponse)) 
		{
			$this->pseudo	= $Treponse["pseudo"];
			$this->nom		= $Treponse["nom"];
			$this->prenom	= $Treponse["prenom"];
			$this->courriel	= $Treponse["courriel"];
		} else throw new Exception("Cr&eacute;ation objet Professeur impossible");
	}

	public function __destruct()
	{
		// la suppression d'un profeseur peut avoir des conséquences sur d'autres objets
	}

	// setter

	// GETTERS ====================================================================================

	// Autre ======================================================================================
	public function AfficherProfil()
	{
		return	"<h1>Profil</h1>\n"
			.	"<p>Pseudo: "		. $this->pseudo		. "</p>\n"
			.	"<p>Nom: " 			. $this->nom		. "</p>\n"
			.	"<p>Pr&eacute;nom: ". $this->prenom		. "</p>\n"
			.	"<p>Courriel: "		. $this->courriel	. "</p>\n";
	}

	public function AfficherGroupes()
	{
		return self::AfficherRubrique("Vos classes/groupes", "Prof_Groupe", "Groupe", "groupeID", $this->ID);
	}

	public function AfficherCompetences()
	{
		$code = "<h1>Vos comp&eacute;tences</h1>\n";
		// génération de la liste
		$code .= "<p>En construction ...</p>\n";
		return $code;
	}

	public function AfficherEvaluations()
	{
		$code = "<h1>Vos &eacute;valuations</h1>\n";
		// génération de la liste
		$code .= "<p>En construction ...</p>\n";
		return $code;
	}

	public function AfficherDevoirs()
	{
		$code = "<h1>Vos devoirs</h1>\n";
		// génération de la liste
		$code .= "<p>En construction ...</p>\n";
		return $code;
	}

	// Méthodes statiques =========================================================================

	public static function AfficherMenu()
	{
		return	"<a href=/professeur/modifier>Modifier profil</a>\n"
			.	"<a href=#>Classes</a>\n"
			.	"<a href=#>Devoirs</a>\n"
			.	"<a href=#>Comp&eacute;tences</a>\n"
			.	"<a href=#>&Eacute;valuer</a>\n"
			.	"<a href=#>Synth&egrave;ses</a>\n"
			.	"<a href=/deconnexion>D&eacute;connexion</a>\n";
	}

	public static function AfficherRubrique($titre, $tableLienProfRubrique, $tableRubrique, $champJointure, $profID)
	{	// factorisation de l'affichage des rubriques
		$code = "<h1>" . $titre . "</h1>\n";

		$ReponseSQL = PEUNC\BDD::SELECT("{$tableRubrique}.nom FROM {$tableLienProfRubrique} INNER JOIN {$tableRubrique} ON {$tableLienProfRubrique}.{$champJointure} = {$tableRubrique}.ID WHERE {$tableLienProfRubrique}.profID = ?", [$profID]);

		switch(PEUNC\BDD::SELECT("count(*) FROM {$tableLienProfRubrique} WHERE {$tableLienProfRubrique}.profID = ?", [$profID]))
		{
			case 0:		// aucune réponse
				$code .= "<p>Vous n&apos;avez aucun groupe/classe</p>\n";
				break;
			case 1:		// réponse unique
				$code .= "<p>" . $ReponseSQL . "</p>\n";
				break;
			default:	// construction de la liste
				$code .= "<ul>\n";
				foreach($ReponseSQL as $valeur)	$code .= "<li>{$valeur["nom"]}</li>\n";
				$code .= "</ul>\n";
		}
		return $code . "\n";
	}
}
