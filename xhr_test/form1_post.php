<?php
    $pdo = new PDO("mysql:host=localhost;dbname=ajax_test;charset=utf8", "root", "");

    $nom = $_POST['nom'];
    $postnom = $_POST['postnom'];

    $req = "INSERT INTO users (nom, postnom) VALUES(?, ?)";
    $statement = $pdo->prepare($req);
    $affectedRows = $statement->execute(array($nom, $postnom));

    if($affectedRows == 1)
    {
        echo "Enregistrement effectué avec succès !";
    }
    else
    {
        echo "Echec d'enregistrement !";
    }
?>