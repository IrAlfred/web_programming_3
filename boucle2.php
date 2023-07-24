<?php
    #die("Une erreur s'est produite sur la page");
    $nb = 8;
    $i = 1;
    ?>

<h1>Table de multiplication</h1>
    <ul>
    <?php
    while($i < 13){ ?>
        <li><?php print $i.'x'.$nb. '='.$nb*$i ?></li>
    <?php
    $i++; 
    }
    ?>
    </ul>

?>