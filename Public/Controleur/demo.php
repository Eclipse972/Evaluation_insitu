<?php
ob_start();	// début du code <section>
?>
	<h1>K&eacute;sako?</h1>
	<p>Ce mode permet d&apos;explorer toutes les possibilit&eacute;s de l&apos;application. La seule
		différence avec un utilisateur enregistr&eacute; est que vous ne pourrez cr&eacute;er/modifier/effacer
		aucune donn&eacute;e.
	</p>
	<p><a href=/professeur>page Professeur en mode d&eacute;mo</a></p>
	<p><a href=/connecter>Vous connecter</a></p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

$this->setFooter("");
$this->setView("doctype.html");
