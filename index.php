<?php

require ("user.php");

$thomas = new user ();

$thomas->afficherUser("thomas", "bonny");


?>



<html>

<head> 
    <link rel="stylesheet" href="index_style.css" />
    <title>exercice 1</title>
</head>

<body>

<table border="1">
    <tr>
        <td> <p class="hauttableau"><?php $thomas->afficherNom("bonny"); ?></p></td>
    </tr>

    <tr>
        <td> 
            <p>nom : <?php $thomas->afficherNom("bonny")?></p>
            <p>prenom : <?php $thomas->afficherPrenom("thomas")?></p>
        </td>
    </tr>

    <tr>
        <td>
            <?php $thomas->afficherUser("thomas", "bonny"); ?>
        </td>
    </tr>


</table>

</body>

</html>