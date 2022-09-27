<?php	// routeur de PEUNC
session_start();

spl_autoload_register(function($classe)
	{
		if (substr($classe, 0, 5) == "PEUNC")
		{	// PEUNC
			$classe = substr($classe, 6, 99);
			$prefixe = "PEUNC/classes/";
		}
		else $prefixe =  "Modele/classe_"; // utilisateur

		require_once $prefixe . $classe . ".php";
	}
);

try
{
	$route = new PEUNC\HttpRoute;				// à partir d'une requête Http on trouve la route

	PEUNC\Page::SauvegardeEtat($route);			// sauvegarde de l'état courant

	$reponse = new PEUNC\ReponseClient($route);	// construction de la réponse en fonction de la route trouvée
}
catch(PEUNC\ServeurException $e)
{
	$PAGE = new PEUNC\Page();	// il n'y a pas de route
	$PAGE->setHeaderText("<p>Erreur serveur</p>");
	$PAGE->SetSection("<h1>" . $e->getMessage() . " - code: " . $e->getCode() . "</h1>\n"
					. "<p>Image &agrave; venir</p>\n"
					. "<p>Si le probl&egrave;me persiste envoyez-moi un courriel en cliquant sur l&apos;ic&ocirc;ne messagerie ci-dessous.</p>"
				);
	$PAGE->setView("erreur.html");
	include $PAGE->getView();
}
catch(PDOException $e)
{
	$PAGE = new PEUNC\Page($route);
	$PAGE->setHeaderText("<p>Erreur de base de donn&eacute;es</p>");
	$PAGE->SetSection("<h1>" . $e->getMessage() . "</h1>\n");
	$PAGE->setView("erreur.html");
	include $PAGE->getView();
}
catch(PEUNC\ApplicationException $e)
{
	$PAGE = new PEUNC\Page($route);
	$PAGE->setHeaderText("<p>Erreur de l'application</p>");
	$PAGE->SetSection("<h1>" . $e->getMessage() . "</h1>\n"
					. "<p>Noeud : " . $route->getAlpha() . " - " . $route->getAlpha() . " - " . $route->getGamma()
					. " M&eacute;thode:" . $route->getMethode() . "</p>\n");
	$PAGE->setView("erreur.html");
	include $PAGE->getView();
}
catch(Exception $e)
{
	$PAGE = new PEUNC\Page($route);
	$PAGE->setHeaderText("<p>Erreur inconnue</p>");
	$PAGE->SetSection("<h1>" . $e->getMessage() . "</h1>\n"
					. "<p>Noeud : " . $PAGE->getAlpha() . " - " . $PAGE->getAlpha() . " - " . $PAGE->getGamma()
					. " M&eacute;thode:" . $PAGE->getMethode() . "</p>\n");
	$PAGE->setView("erreur.html");
	include $PAGE->getView();
}
