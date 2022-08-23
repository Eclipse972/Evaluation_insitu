<?php
ob_start();	// début du code <section>
?>
	<h1>La page professeur</h1>
	<p>Cette page est d&eacute;coup&eacute;e en plusieurs parties</p>
	<ul>
		<li>Profil: </li>
		<li>Classes: </li>
		<li>Devoirs: </li>
		<li>Comp&eacute;tences: </li>
		<li>&Eacute;valuations: </li>
	</ul>
	<p><a href=/professeur>Retour &agrave; la page Professeur</a></p>
<?php
$tampon = ob_get_contents();
ob_end_clean();

$this->setSection($tampon);

$this->setFooter("");
$this->setView("doctype.html");
