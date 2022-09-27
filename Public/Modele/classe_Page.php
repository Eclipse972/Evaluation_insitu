<?php
class Page extends PEUNC\Page
{
	protected $avertissement	= false; // drapeau avertissement écran étroit

	// contexte de l'application
	protected $profID;
	protected $classeID;
	protected $eleveID;
	protected $devoirID;

	public function __construct(PEUNC\HttpRoute $route, array $TparamURL = [])
	{
		parent::__construct($route, $TparamURL);
		$this->profID	= (isset($_SESSION["profID"]))	? $_SESSION["profID"]	: 1;	// 1 -> mode démo
		$this->classeID	= (isset($_SESSION["classeID"]))? $_SESSION["classeID"]	: null;
		$this->eleveID	= (isset($_SESSION["eleveID"]))	? $_SESSION["eleveID"]	: null;
		$this->devoirID	= (isset($_SESSION["devoirID"]))? $_SESSION["devoirID"]	: null;
	}

	// SETTERS ====================================================================================
	public function setAvertissement()	{ $this->avertissement = true; } // certaines pages exigent un grand écran

	// GETTERS ====================================================================================
	public function getAvertissement()
	{
		return !$this->avertissement ? "" :
			"<div id=avertissement>"
			. "<h1>Attention</h1>\n"
			. "<p>Cette page n&apos;est pas con&ccedil;ue pour les petits &eacute;crans</p>\n"
			. "<p>Passez en mode paysage ou utilisez un ordinateur pour voir correctement cette page.</p>\n"
			. "</div>\n";
	}

}
