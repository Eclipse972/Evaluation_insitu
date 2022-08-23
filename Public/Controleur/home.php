<?php	// page d'accueil
$this->setHeaderText("Accueil");

ob_start();	// début du code <section>
?>
<h1>Bienvenu.e</h1>
<p><?php include"Vue/commun/lipsum.html"; ?></p>
<p>Envoyez-moi un courriel pour <a href="mailto:christophe.hervi@ac-amiens.fr?subject=Créer un compte">cr&eacute;er un compte</a></p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

ob_start();	// début du code <nav>
?>
	<a href=/connecter>CONNEXION</a>
	<a href=/demonstration>D&Eacute;MO</a>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setNav($tampon);

$this->setFooter("");
$this->setView("doctype.html");
