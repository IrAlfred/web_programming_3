<?php
    $etudiants = array(
        array(
            'nom' => 'Samuel',
            'postnom' => 'Mbangale',
            'genre' => 'M'
        ),
        array(
            'nom' => 'Dorcas',
            'postnom' => 'Saatatu',
            'genre' => 'F'
        ),
        array(
            'nom' => 'Huguette',
            'postnom' => 'Karubandika',
            'genre' => 'F'
        ),
        array(
            'nom' => "Adel",
            'postnom' => 'Mukeveri',
            'genre' => 'F'
        )

    );

    #var_dump($etudiants);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des tableaux</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Postnom</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $length = count($etudiants);
            $i = 0;
            while($i < $length){ ?>
                <tr>
                    <td><?php echo $etudiants[$i]["nom"] ?></td>
                    <td><?php echo $etudiants[$i]["postnom"] ?></td>
                    <td><?php echo $etudiants[$i]["genre"] ?></td>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</body>
</html>