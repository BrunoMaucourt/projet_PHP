<?php
    // check if user is registrated if not redirect to authentification
    if($_SESSION['account_level_id'] != 3){
        header("Location: profil.php"); 
        exit();
        }