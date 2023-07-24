<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['error'])){ ?>
        <p style="color:red">Echec de connexion</p>
    <?php } ?>
    <form action="verif_login.php" method="post">
        <label for="nom">nom</label> <br>
        <input type="text" name="nomuser" id="nom"><br>
        <label for="pwd">Mot de passe</label><br>
        <input type="password" name="pwd" id="pwd"><br>

        <input type="submit" value="Connexion"><br>
    </form>
</body>
</html>