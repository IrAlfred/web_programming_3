<?php 
    if(isset($_GET['nom']) && isset($_GET['postnom']))
    {
        echo "Bonjour ". $_GET['nom']. ' '. $_GET['postnom'];
    }