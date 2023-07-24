<?php
    $pwd = "UacButembo";

    echo md5($pwd).'<br>';
    echo sha1($pwd).'<br>';
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    if(password_verify("UaButembo", $hash))
    {
        echo "Mot de passe correct";
    }
    else
    {
        echo "Mot de passe incorrect ";
    }
?>