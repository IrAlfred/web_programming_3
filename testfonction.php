<?php
// $prix = 50;


// unset($prix); //Effacer la variable prix

// if(isset($prix))
// {
//     echo "La variable existe !";
// }
// else
// {
//     echo ("La variable n'existe pas");
// }

$msg = "Bienvenu à l'ISEAB Butembo";
$msg2 = str_replace('ISEAB', 'UAC', $msg);

//on remplace la chaine ISEAB par UAC dans le msg
// echo $msg2;

$str = "Une phrase avec, des espaces";
$part1 = strtok($str, " ");
$part2 = strtok($str, " ");

echo $part1.'<br>';
echo $part2;
?>