<?php
    require_once("connexion.php");

    $nom = htmlspecialchars($_POST['nom']);
    $postnom = htmlspecialchars($_POST['postnom']);
    $genre = htmlspecialchars($_POST['genre']);
    $dateNaiss = htmlspecialchars($_POST['dateNaiss']);
    $id=$_POST['id'];

    $sql = "UPDATE etudiant SET nom=?, postnom=?, genre=?, dateNaiss=? WHERE id=?";

    $statement = $pdo->prepare($sql);
    $lignes = $statement->execute(array($nom, $postnom, $genre, $dateNaiss,$id));

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


