<?php
require ("personnages.php");

$heavy = new personnage (1);
$scout = new personnage (2);
$matpat = new personnage (3);
$markimoo = new personnage (4);


$heavy -> afficher();
$scout -> afficher();
$matpat -> afficher();
$markimoo -> afficher();

$Tableau = Array();

array_push($tableau, $heavy);
array_push($tableau, $scout);
array_push($tableau, $matpat);
array_push($tableau, $markimoo);

$heavy = $Tableau[0] ;
$scout = $Tableau[1] ;
$matpat = $Tableau[2] ;
$markimoo = $Tableau[3] ;

?>