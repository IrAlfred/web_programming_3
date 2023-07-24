<?php
    $pdo = new PDO("mysql:host=localhost;dbname=ajax22;charset=utf8", "root", "");

    if(isset($_GET['search'])){
        $sql = "SELECT * FROM utilisateur WHERE nom like ? OR postnom like ?";

        $statement = $pdo->prepare($sql);
        $statement->execute(array('%'.$_GET['search'].'%', '%'.$_GET['search'].'%'));
    }
    else{
        $sql = "SELECT * FROM utilisateur";

        $statement = $pdo->prepare($sql);
        $statement->execute();
    }
    
    ob_start();
    while($user = $statement->fetch()){ ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['nom'] ?></td>
        <td><?= $user['postnom'] ?></td>
    </tr>
    <?php } 
        $content = ob_get_clean();
        echo $content;
    ?>
