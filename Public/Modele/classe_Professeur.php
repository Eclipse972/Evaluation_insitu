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

	// SETTERS ====================================================================================

	// GETTERS ====================================================================================

	// Affichage ==================================================================================
	public function AfficherProfil()
	{
		return	"<p><b>Pseudo: "	. $this->pseudo		. "</b></p>\n"
			.	"<p>Nom: " 			. $this->nom		. "</p>\n"
			.	"<p>Pr&eacute;nom: ". $this->prenom		. "</p>\n"
			.	"<p>Courriel: "		. $this->courriel	. "</p>\n";
	}

	public static function AfficherMenu()
	{
		return	"<a href=/professeur/modifier>Modifier profil</a>\n"
			.	"<a href=/classes>Classes</a>\n"
			.	"<a href=/devoirs>Devoirs</a>\n"
			.	"<a href=/referentiels>R&eacute;f&eacute;rentiels</a>\n"
			.	"<a href=#>&Eacute;valuer</a>\n"
			.	"<a href=#>Planifier</a>\n"
			.	"<a href=#>Synth&egrave;ses</a>\n"
			.	"<a href=/deconnexion>D&eacute;connexion</a>\n";
	}
}
