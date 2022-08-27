<?php
class Professeur extends PEUNC\User
{
	public function __construct($profID = 1)
	{	// hydratation
		$this->ID = $profID;
		// list($pseudo, $nom, $prenom, $courriel) = ... à partir de PHP7
		$Treponse = PEUNC\BDD::SELECT("pseudo, nom, prenom, courriel FROM Utilisateur WHERE ID = ?", [$profID]);
		$this->pseudo	= $Treponse["pseudo"];
		$this->nom		= $Treponse["nom"];
		$this->prenom	= $Treponse["prenom"];
		$this->courriel	= $Treponse["courriel"];
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

	public function AfficherClasses()
	{
		$code = "<h1>Vos classes</h1>\n";
		// génération de la liste
		$code .= "<p>En construction ...</p>\n";
		return $code;
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
}
