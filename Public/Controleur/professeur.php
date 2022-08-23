<?php // controleur de la page professeur
$IDprof = isset($_SESSION["IDprof"]) ? $_SESSION["IDprof"] : 1; // identifiant du prof actuel

$this->setCSS(["professeur"]);

ob_start();	// début du code <section>
?>
<h1>Profil</h1>
<p>Pseudo: <?=PEUNC\BDD::SELECT("pseudo FROM Utilisateur WHERE ID = ?", [$IDprof])?></p>
<p>Nom: <?=PEUNC\BDD::SELECT("nom FROM Utilisateur WHERE ID = ?", [$IDprof])?></p>
<p>Pr&eacute;nom: <?=PEUNC\BDD::SELECT("prenom FROM Utilisateur WHERE ID = ?", [$IDprof])?></p>
<p>Courriel: <?=PEUNC\BDD::SELECT("courriel FROM Utilisateur WHERE ID = ?", [$IDprof])?></p>

<h1>Vos devoirs</h1>
<p>En construction ...</p>

<h1>Vos comp&eacute;tences</h1>
<p>En construction ...</p>

<h1>Vos classes</h1>
<p>En construction ...</p>

<h1>Vos &eacute;valuations</h1>
<p>En construction ...</p>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setSection($tampon);

ob_start();	// début du code <nav>
?>
<a href=/professeur/modifier>Modifier profil</a>
<a href=#>Classes</a>
<a href=#>Devoirs</a>
<a href=#>Comp&eacute;tences</a>
<a href=#>&Eacute;valuer</a>
<a href=/deconnexion>D&eacute;connexion</a>
<?php
$tampon = ob_get_contents();
ob_end_clean();
$this->setNav($tampon);

$this->setFooter("professeur");
$this->setView("doctype.html");
