<?php


    if(isset($_GET['value']) && !empty($_GET['value']) && $_GET['value'] ){
        echo"logout";
        $_SESSION['authenticated'] = false;
        session_destroy();
        header("Location: login.html"); 
        exit();
    }else{

        session_start();
  
        if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
            header("Location: login.html"); // Redirect to the login page
            exit();
        }
    }

?>