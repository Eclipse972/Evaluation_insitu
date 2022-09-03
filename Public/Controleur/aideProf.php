<?php
ob_start();	// début du code <section>
?>
<h1>La page professeur</h1>
<p>Cette page est d&eacute;coup&eacute;e en plusieurs parties</p>
<ul>
	<li>Profil: Vos information d&apos;identit&eacute;</li>
	<li>Classes: Les clases donc vous avez la reponsabilit&eacute;</li>
	<li>Devoirs: La liste des devoirs (TP, TD, exos, wims, ...) sur lesquels vous pouvez évaluer vos &eacute;l&egrave;ves</li>
	<li>Comp&eacute;tences: </li>
	<li>&Eacute;valuations: </li>
</ul>
<p><a href=/professeur>Retour &agrave; la page Professeur</a></p>
<?php
$this->setSection(ob_get_contents());
ob_end_clean();

$this->setFooter("");
$this->setView("doctype.html");
