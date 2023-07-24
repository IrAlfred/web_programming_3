<?php
$user = array(
    'nom' => "Jean",
    'prenom' => "Marc",
    'adresse' => "Q. Kitulu",
    'tel' => "09986565698"
);

#echo "N° Tel:" . $user['tel'];
$user['nom'] = "Samuel";
// foreach ($user as $label => $item)
// {
//     echo "$label : $item <br>";
// }

#var_dump($user);
echo '<pre>';
print_r($user);
echo '</pre>';
?>