<?php
ob_start();	// début du code <section>
?>
<h1>La page professeur</h1>
<p>Cette page est d&eacute;coup&eacute;e en plusieurs parties</p>
<ul>
	<li>Profil: Vos informations d&apos;identit&eacute;</li>
	<li>Classes: Les clases donc vous avez la reponsabilit&eacute;</li>
	<li>Devoirs: La liste des devoirs (TP, TD, exos, wims, ...) sur lesquels vous pouvez &eacute;valuer vos &eacute;l&egrave;ves</li>
	<li>R&eacute;f&eacute;rentiels: mot pour d&eacute;signer un groupe de comp&eacute;tences.</li>
</ul>
<p><a href=/professeur>Retour &agrave; la page Professeur</a></p>
<?php
$this->setSection(ob_get_clean());

$this->setFooter("");
$this->setView("doctype.html");
