<?php
ob_start();	// début du code <section>
?>
<h1>Mot de passe ou pseudo oubli&eacute;?</h1>
<p>La gestion de ce genre de probl&egrave;me n&apos;est pas encore impl&eacute;ment&eacute;e. Envoyez-moi
un courriel en cliquant sur l&apos;ic&ocirc;ne messagerie en bas de cette page.</p>
<p><strong>Attention</strong> je ne consulte mes courriels que le soir!</p>
<?php
$this->setSection(ob_get_clean());

$this->setFooter("");
$this->setView("doctype.html");
