<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>
<body>
    <form id="myForm">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="postnom">Postnom</label>
        <input type="text" name="postnom" id="postnom">
        <button type="submit" id="btnSave">Enregistrer</button>
    </form>
    <div>
        <h3>Enregistrement</h3>
        <div>
            <button id="loadUsers">Load users</button>
        </div>
        <div id="users">

        </div>

    </div>
    <script src="save.js"></script>
    <script src="loadUsers.js"></script>
</body>
</html>