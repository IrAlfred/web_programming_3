<?php
    //die("Cette page contient une erreur");
    require_once("connexion.php");

    if(isset($_GET['search']))
    {
        $rech = htmlspecialchars ($_GET['recherche']);

        $sql = "SELECT * FROM etudiant WHERE nom like ? OR postnom like ?";
        $etudiants = $pdo->prepare($sql);
        $etudiants->execute(array($rech.'%', $rech.'%'));
    }
    else
    {
        $sql = "SELECT * FROM etudiant";
        $etudiants = $pdo->prepare($sql);

        $etudiants->execute(array());
    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="inscription.php">Accueil</a></li>
                <li><a href="afficher.php">Etudiants</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Inscription</h2>
<?php 
    if(isset($_GET['status']) && $_GET['status']==1){ ?>
        <p style="color:green;">Enregistrement réussi</p>
    <?php }
    elseif(isset($_GET['status']) && $_GET['status']==0){ ?>
        <p style="color:red;">Echec d'enregistrement</p>
    <?php } ?>
        <form action="inscription_post.php" method="POST">
            <label for="id">ID</label>
            <input type="text" name="id" id="id"><br>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom"><br>
            <label for="postnom">Postnom</label>
            <input type="text" name="postnom" id="postnom"><br>
            <label for="genre">Genre</label>
            <select name="genre" id="genre">
                <option value="M">M</option>
                <option value="F">F</option>
            </select><br>
            <label for="dateNaiss">Date de naiss.</label>
            <input type="date" name="dateNaiss" id="dateNaiss"><br>
            <input type="submit" value="Enregistrer">
        </form>
        <div>
            <h2>Liste des étudiants</h2>
            <!-- formulaire de recherche -->
<form method="get" align="right">
    <input type="text" name="recherche" id="recherche">
    <input type="submit" value="Rechercher" name="search">
</form>
        <!-- Fin formulaire de recherche -->
        <?php 
    if(isset($_GET['del']) && $_GET['del']==1){ ?>
        <p style="color:green;">Supprimé !</p>
    <?php }
    elseif(isset($_GET['del']) && $_GET['del']==0){ ?>
        <p style="color:red;">Echec de suppression</p>
    <?php } ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>POSTNOM</th>
                        <th>GENRE</th>
                        <th>Date NAISS.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
<tbody>
    <?php while($etu = $etudiants->fetch()){ ?>
        <tr>
            <td><?= $etu['id'] ?></td> 
            <td><?= $etu['nom'] ?></td> 
            <td><?= $etu['postnom'] ?></td> 
            <td><?= $etu['genre'] ?></td> 
            <td><?= $etu['dateNaiss'] ?></td>
            <td><a href="supprimer.php?id=<?= $etu['id'] ?>">Supprimer</a>
            <a href="modifier.php?id=<?= $etu['id'] ?>">Modifier</a>
        </td> 
        </tr>
    <?php } ?>
</tbody>
            </table>
        </div>
    </main>
    <footer>
        <p>&copy; Uaconline <?= date('Y') ?></p>
    </footer>
</body>
</html>