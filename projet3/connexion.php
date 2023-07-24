<?php
    try
    {
        $pdo = new PDO("mysql:host=localhost;dbname=g3ig;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die($e->getMessage());
    }