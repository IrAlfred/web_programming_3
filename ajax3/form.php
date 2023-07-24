<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax avec la méthode POST</title>
</head>
<body>
    <h2>Enregistrer</h2><hr>
    <p id="msg"></p>
    <form id="myform">
        <input type="text" name="nom" id="nom" placeholder="Nom"><br>
        <input type="text" name="postnom" id="postnom" placeholder="Postnom"><br>
        <input type="submit" value="Enregistrer">
    </form>
    <div>
        <!-- <button id="btn">Afficher utilisateurs</button> -->
        <h2>Liste des utilisateurs</h2>
        <form id="search_form">
            <label for="search">Recherche</label>
            <input type="text" name="search" id="search">
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>POSTNOM</th>
                </tr>
            </thead>
            <tbody id="mytable"></tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>