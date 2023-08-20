<?php
    include('connection.php');

    $id = $_GET['c_id'];

    $sql = "DELETE FROM `courier` WHERE  c_id='$id' ";
    $result =$connect->query($sql);
    if ($result) {
        echo "Deletion Sucessful";
    } else {
        echo "Somethig Wrong";
    }
?>