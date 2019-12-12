<?php
require ("personnages.php");

$heavy = new personnage ();
$scout = new personnage ();

$heavy->setPseudo("heavy weapon guy ");
$scout->setPseudo("scout ");


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