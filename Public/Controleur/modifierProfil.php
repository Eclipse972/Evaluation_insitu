<?php
ob_start();	// début du code <section>
?>
<h1>En construction</h1>
<p>Pour le moment envoyez-moi un courriel pour modifier vos informations.</p>
<p><a href=/professeur>Retour</a></p>
<?php
$tampon = ob_get_contents();
ob_end_clean();

$this->setSection($tampon);

$this->setFooter("");
$this->setView("doctype.html");
