<?php		// API de la classe User de PEUNC
namespace PEUNC;

interface iUser
/* 
 * */
{
// Assesseurs (setters)
	public function setID($entier);
	public function setPseudo($texte);
	public function setMDP($texte);		// remplacé par le hash dans le futur
	public function setNom($texte);
	public function setPrenom($texte);
	public function setCouriel($texte);

// Mutateur (getters)
	public function getID();
	public function getPseudo();
	public function getMDP();
	public function getNom();
	public function getPrenom();
	public function getCouriel();

// Autres

}
