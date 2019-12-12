<?php
require ("personnages.php");

$heavy = new personnage ();
$scout = new personnage ();

$heavy->setPseudo("heavy weapon guy ");
$scout->setPseudo("scout ");

$scout -> afficher();
$heavy -> afficher();

?>