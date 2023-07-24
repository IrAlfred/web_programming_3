<?php
    if(!isset($_GET['id']))
    {
        header('Location:inscription.php?del=0');
    }
    elseif(!is_numeric($_GET['id']))
    {
        header('Location:inscription.php?del=0');
    }
    else
    {
        $id = $_GET['id'];
        require_once("connexion.php");
        $sql = "DELETE FROM etudiant WHERE id=?";
        $statement = $pdo->prepare($sql);
        $lignes = $statement->execute(array($id));

        if($lignes==1):
            header("Location:inscription.php?del=1");
            //echo "Supprimé !";
        else :
            header("Location:inscription.php?del=0");
            //echo "Echec de suppression";
        endif;
    }
    
    