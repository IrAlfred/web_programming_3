<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <form action="enregistrement.php" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="postnom">Postnom</label>
        <input type="text" name="postnom" id="postnom"><br>
        <label for="genre">Genre</label>
        <select name="genre" id="genre">
            <option value="0" selected disabled>--select genre--</option>
            <option value="m">M</option>
            <option value="f">F</option>
        </select><br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age">
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>