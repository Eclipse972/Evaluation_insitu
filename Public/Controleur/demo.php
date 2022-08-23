<?php
$this->setHeaderText("D&eacute;mo");
$this->setCSS([]);

ob_start();	// début du code <section>
?>
	<h1>Le mode d&eacute;monstration</h1>
	<p>Ce mode permet d&apos;explorer toutes les possibilit&eacute;s de l&apos;application. La seule
		différence avec un utilisateur enregistr&eacute; est que vous ne pourrez cr&eacute;er/modifier/effacer
		aucune donn&eacute;e.
	</p>
	<p><a href=/professeur>Aller &agrave; la page Professeur</a></p>
	<p><a href=/connecter>Vous connecter</a></p>
<?php
$tampon = ob_get_contents();
ob_end_clean();

$this->setSection($tampon);

$this->setFooter("");
$this->setView("doctype.html");
