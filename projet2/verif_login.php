<?php
if(isset($_POST["nomuser"])){
    // $nomuser = htmlspecialchars($_POST["nomuser"]);
    // $pwd = htmlspecialchars($_POST["pwd"]);
    
    $nomuser = htmlentities($_POST["nomuser"]);
    $pwd = htmlentities($_POST["pwd"]);

    // $nomuser = $_POST["nomuser"];
    // $pwd = $_POST["pwd"];

    if($nomuser == "serge" && $pwd == "UAC2023"){
        echo "connexion reussie<br>";
        echo "Boujour"." ".$nomuser;
    }else{
        // echo "Echec de connexion";
        //header("Location:login.php?error");
        echo "Boujour"." ".$nomuser;
    }
}