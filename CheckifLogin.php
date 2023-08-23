<?php


    // if(isset($_GET['value']) && !empty($_GET['value']) && $_GET['value'] ){
    //     echo"logout";
    //     $_SESSION['authenticated'] = false;
    //     session_start();
    //     session_unset();
    //     session_destroy();
    //     header("Location: login.html"); 
    //     exit();
    // }
    // else{

        session_start();
        if(isset($_SESSION['courier']) && $_SESSION['courier']){
                    //exit and redirect to login.html if user is trying to open anyother file than "courier_view.php"
            if(basename($_SERVER['PHP_SELF']) != "courier_view.php"){
                if(basename($_SERVER['PHP_SELF']) != "updateShipmentStatus.php"){
                    header("Location: login.html"); 
                    exit();
                }
                
            }

        }
        if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
            header("Location: login.html"); // Redirect to the login page
            exit();
        }
    // }

?>