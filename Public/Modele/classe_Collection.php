<?php
class Collection
/* Un professeur a plusieurs relations 1-n avec d'autres entités:
 * groupes
 * compétences
 * évaluations
 * ...
 * Pour chacune de ces entités, il va falloir fournir une liste de liens qui prendra toujours
 * la même forme.
 * */
{
	public function __construct()	{}

	public static function Liste($vueBD, $profID)
	{
		$ReponseSQL = PEUNC\BDD::SELECT("nom, ID FROM {$vueBD} WHERE profID = ?", [$profID]);

		switch(PEUNC\BDD::SELECT("count(*) FROM {$vueBD} WHERE profID = ?", [$profID]))
		{
			case 0:		// aucune réponse
				$code = "";
				break;
			case 1:		// réponse unique
				$code = "<a href=#>{$ReponseSQL["nom"]}</a>\n";
				break;
			default:	// construction de la liste
				$code = "";
				foreach($ReponseSQL as $valeur)	$code .= "<a href=#>{$valeur["nom"]}</a>\n";
		}
		return $code;
	}
}
