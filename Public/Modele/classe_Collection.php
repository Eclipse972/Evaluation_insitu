<?php
class Collection
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
