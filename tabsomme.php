<?php
    $tab = array(10, 15, 20, 30);
    $somme = 0;
    // foreach($tab as $nb)
    // {
    //     $somme = $somme+ $nb;
    //     echo $nb . " + ";
    // }
    // $length = count($tab);
    // for($i=0; $i<$length; $i++)
    // {
    //     $somme = $somme + $tab[$i];
    //     echo $tab[$i]. (($i==$length-1)?"=":"+");

    // }
    foreach($tab as $index => $nb)
    {
        echo $index. '->' . $nb. '<br>';
    }
    #$somme = array_sum($tab);
    #echo $somme;
?>