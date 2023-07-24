<?php
    sleep(5);
    $pdo = new PDO("mysql:host=localhost;dbname=ajax22;charset=utf8", "root", "");
    if(isset($_POST['nom']) && isset($_POST['postnom']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $postnom = htmlspecialchars($_POST['postnom']);

        $sql = "INSERT INTO utilisateur (nom, postnom) VALUES(?, ?)";

        $statement = $pdo->prepare($sql);

        $lignes = $statement->execute(array($nom, $postnom));
        
        if($lignes==1){
            echo "Enregistrement effectué avec succes !";
        }
        else{
            echo "Echec d'enregistrement ";
        }
    }