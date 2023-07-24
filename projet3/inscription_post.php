<?php
    require_once("connexion.php");

    $nom = htmlspecialchars($_POST['nom']);
    $postnom = htmlspecialchars($_POST['postnom']);
    $genre = htmlspecialchars($_POST['genre']);
    $dateNaiss = htmlspecialchars($_POST['dateNaiss']);

    $sql = "INSERT INTO etudiant (nom, postnom, genre, dateNaiss) VALUES(?, ?, ?, ?)";

    $statement = $pdo->prepare($sql);
    $lignes = $statement->execute(array($nom, $postnom, $genre, $dateNaiss));

    if($lignes == 1)
    {
        // echo "Enregistrement effectué avec succes !";
        header("Location:inscription.php?status=1");
    }
    else
    {
        //echo "Echec d'enregistrement !";
        header("Location:inscription.php?status=0");
    }


