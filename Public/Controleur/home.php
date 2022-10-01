<?php	// page d'accueil
ob_start();	// début du code <section>
?>
<h1>Bienvenu.e</h1>
<p>L&apos;objectif de site est de pouvoir &eacute;valuer en situation &agrave; l&apos;aide de son smartphone.</p>
<p>Envoyez-moi un courriel pour <a href="mailto:christophe.hervi@ac-amiens.fr?subject=Créer un compte">cr&eacute;er un compte</a></p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

ob_start();	// début du code <nav>
?>
<a href=/connecter>CONNEXION</a>
<a href=/demonstration>D&Eacute;MO</a>
<?php
$this->setNav(ob_get_contents());
ob_end_clean();

$this->setFooter("");
$this->setView("doctype.html");
