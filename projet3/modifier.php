<?php
require_once("connexion.php");

    if(isset($_GET['id']))
    {
        $sql = "SELECT * FROM etudiant WHERE id=?";
        $etudiants = $pdo->prepare($sql);
        $etudiants->execute(array($_GET['id']));
        $etu = $etudiants->fetch();
    }
    else
    {
        header('Location:inscription.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <header></header>
    <main>
        <div>
            <h2>Modifier</h2>
            <form action="modifier_post.php" method="POST">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" value="<?= $etu['id'] ?>"><br>

            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="<?= $etu['nom'] ?>"><br>

            <label for="postnom">Postnom</label>
            <input type="text" name="postnom" id="postnom" value="<?= $etu['postnom'] ?>"><br>

            <label for="genre">Genre</label>
<select name="genre" id="genre">
    <option value="M"
    
    <?= $etu['genre']=='M'? 'selected':''?>
    
    >M</option>
    
    <option value="F" <?= $etu['genre']=='F'? 'selected':''?>
    
    >F</option>
</select><br>
            <label for="dateNaiss">Date de naiss.</label>
            <input type="date" name="dateNaiss" id="dateNaiss" value="<?= $etu['dateNaiss'] ?>"><br>

            <input type="submit" value="Enregistrer">
        </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>