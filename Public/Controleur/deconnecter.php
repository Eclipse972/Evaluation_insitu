<?php
$_SESSION["IDprof"] = 1; // mode démo

ob_start();	// début du code <section>
?>
<h1>Vous &ecirc;tes maintenant d&eacute;connect&eacute;.e</h1>
<p>A bient&ocirc;t!</p>
<?php
$this->setSection(ob_get_clean());

$this->setFooter("");
$this->setView("doctype.html");
