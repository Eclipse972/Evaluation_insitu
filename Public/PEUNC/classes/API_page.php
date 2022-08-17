<?php		// API de la classe Page de PEUNC
namespace PEUNC;

interface iPage
/* Chaque page est entièrement construite avant le moindre affichage. L'hydratation de la page se fait à partir d'un controleur.
 * Une fois la page construite on injecte le code dans le fichier doctype.html. Ce fichier ne fait qu'utiliser les différentes
 * assesseurs (getter)) de la classe.
*/
{
// Mutateur (getters)
	public function getCSS();		// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	public function getTitle();		// affiche le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page)
	public function getHeaderText();// en-tête de la page
	public function getSection();	// affiche le code du corps de la page
	public function getFooter();	// pied de page
	public function getView();		// chemin de la vue associée à la page
	public function getParamURL($i);// retourne le i-ème paramètre passé par l'URL
	public function getDossier();	// retourne le dossier associé à la page

// Assesseurs (setters)
	public function setCSS(array $tableau);		// affiche le code pour utiliser toutes les feuilles CSS associée à la page
	public function setTitle($titre);			// affiche le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page)
	public function setHeaderText($texte);		// en-tête de la page
	public function setSection($code);			// affiche le code du corps de la page
	public function setFooter($code);			// pied de page
	public function setView($fichier);			// définit le chemin de la vue
	public function setDossier($dossier);		// défini le dossier associé à la page

// méthodes statiques
	public static function BaliseImage($src, $alt, $code);		// insère une image en tenant compte du répertoire image. Seul le premier paramètre est obligatoire
	public static function SauvegardeEtat(HttpRouter $route);	// sauvegarde l'état courant dans la session

// Autre
	public function ExecuteControleur();// execute le controleur à partir de la position enregistrée dans l'objet
	public function AfficherOnglets();	// affiche les onglets sur un intervalle alpha. Permet par exemple d'ignorer la page de contact
	public function AfficherMenu();		// affiche le menu les niveaux beta et gamma pour un alpha donné
	public function URLprecedente();	// URL de la page précédete sauf si cette page est spéciale (alpha < 0)
}