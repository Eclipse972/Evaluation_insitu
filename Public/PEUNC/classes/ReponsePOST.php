<?php
namespace PEUNC;

class ReponsePOST extends ReponseClient
{
	private $TlisteReponses;	// réponses utilisateur

	public function __construct(HttpRouter $route)
	{
		parent::__construct($route);
		$formulaire = new $this->classePage(
								$route->getAlpha(),
								$route->getBeta(),
								$route->getGamma(),
								"POST",
								$this->PrepareParametres($_POST)
							);

		header("Location:/professeur"); // redirection vers la page prof sans traitement pour le moment

		// traitement du formulaire		
/*		if ($formulaire->FormulaireOK())
		{
			$formulaire->Traitement();
			$URL = $formulaire->URLprecedente();
		}
		else
		{
			$formulaire->TraitementAvantRepresentation();
			$URL = BDD::SELECT("URL FROM Vue_Routes WHERE niveau1 = ? AND niveau2 = ? AND niveau3 = ? AND methodeHttp = ?", [$formulaire->getAlpha(), $formulaire->getBeta(), $formulaire->getGamma(), "GET"]);
		}
		header("Location:" . $URL); // redirection
*/
	}
}
