<?php 
    $pdo = new PDO("mysql:host=localhost;dbname=ajax_test;charset=utf8", "root", "");

    $sql = "SELECT * FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute();

    ob_start();
    ?>
    <table>
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Postnom</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $statement->fetch()){ ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nom'] ?></td>
                    <td><?= $user['postnom'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php
    $content = ob_get_clean();
    echo $content;

?>