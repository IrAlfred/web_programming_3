<?php
    $username = "moka";
    $pwd = "12345";
    if($username == "samuel" && $pwd == "12345")
    {
        header("Location:index.php");
    }
    else
    {
        header("Location:error.php");
    }