<?php
    function min_tab($tab)
    {
        $min = $tab[0];
        for($i = 1; $i < count($tab); $i++)
        {
            $min = ($tab[$i] < $min) ? $tab[$i]: $min;
        }
        return $min;
    }

    function somme($nb1, $nb2)
    {
        return $nb1 + $nb2;
    } 

    function Puissance($base, $exp)
    {
        if($exp == 1)
        {
            return $base;
        }
        else
        {
            return $base * Puissance($base, $exp -1);
        }
    }

    // $tableau = [12, 21, 20, 17, 15, 6, 41];
    // echo 'La valeur min est '. min_tab($tableau);

    $b = 2;
    $e = 10;
    echo "$b ^ $e = ". Puissance($b, $e);