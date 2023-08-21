<?php
 include 'CheckifLogin.php';
    include('connection.php');

    $id = $_GET['sh_id'];

    $sql = "DELETE FROM `shipment` WHERE  sh_id='$id' ";
    $result =$connect->query($sql);
    if ($result) {
        echo "Deletion Sucessful";
        echo "<script>window.location.href='Manage_Shipment.php'</script>";
    } else {
        echo "Somethig Wrong";
        echo "<script>window.location.href='Manage_Shipment.php'</script>";
    }


?>