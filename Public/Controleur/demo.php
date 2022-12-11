<?php
ob_start();	// début du code <section>
?>
	<h1>K&eacute;sako?</h1>
	<p>Ce mode permet d&apos;explorer toutes les possibilit&eacute;s de l&apos;application.</p>
	<p>La seule diff&eacute;rence avec un utilisateur enregistr&eacute; est que vous ne pourrez cr&eacute;er/modifier/effacer aucune donn&eacute;e.</p>
<?php
$this->setSection(ob_get_clean());
$this->setNav("<a href=/professeur>Rester en mode d&eacute;mo</a>\n<a href=/connecter>Vous identifier</a>\n");
$this->setFooter("");
$this->setView("doctype.html");
