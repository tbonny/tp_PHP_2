<?php
require ("personnages.php");

$heavy = new personnage (3);
$scout = new personnage (4);


$scout -> afficher();
$heavy -> afficher();

while ($heavy->estVivant() && $scout->estVivant())
{
    $chance = rand(0,1);

    if ($chance == 0)
    {
        $heavy->attaquer($scout);
    } else
        {
            $scout->attaquer($heavy);
        }
}


?>