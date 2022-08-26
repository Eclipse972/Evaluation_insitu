<?php // test des erreurs de la BDD
require"PEUNC/classes/BDD.php";

try
{
	PEUNC\BDD::SELECT("* FROM Squelett WHERE alpha = 0", []);
	echo "RAS";
}
catch (PDOException $e)
{
	echo "message: " . $e->getMessage() . "\ncode=" .  $e->getCode();
}
