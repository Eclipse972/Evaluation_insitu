<?php	// page d'accueil
ob_start();	// début du code <section>
?>
<h1>Bienvenu.e</h1>
<p>L&apos;objectif de site est de pouvoir &eacute;valuer en situation &agrave; l&apos;aide de son smartphone.</p>
<p>Le mode d&eacute;mo permet d'acc&eacute;der &agrave; toutes le fontionalit&eacute;s du site.</p>
<?php
$this->setSection(ob_get_clean());

$this->setNav("<a href=/connecter>Se connecter</a>\n<a href=/creerCompte>Cr&eacute;er un compte</a>\n<a href=/demonstration>Mode d&eacute;monstration</a>\n");
$this->setFooter("");
$this->setView("doctype.html");
