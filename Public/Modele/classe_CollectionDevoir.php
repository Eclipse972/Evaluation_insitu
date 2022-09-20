<?php
class CollectionDevoir extends Collection
// gère la relation 1-n du prof avec des groupes d'élèves
{
	public function __construct()	{}

	public static function Liste($profID)	{ return parent::Liste("Vue_Prof_devoirs", $profID); }
}
