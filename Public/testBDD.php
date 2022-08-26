<?php // test des erreurs de la BDD
require"PEUNC/classes/BDD.php";

try
{
	$requete = "* FROM Squelett WHERE alpha = 0";
	PEUNC\BDD::SELECT($requete, []);
	echo "RAS";
}
catch (PDOException $e)
{
	echo "message: " . $e->getMessage() . "\n requete= SELECT " .  $requete;
}
