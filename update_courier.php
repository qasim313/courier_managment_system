
<?php
 include 'CheckifLogin.php';
    include("connection.php");

    if (isset($_POST['sh_id']) && isset($_POST['new_status'])) {
        $sh_id = $_POST['sh_id'];
        $new_status = $_POST['new_status'];

        $sql = "update shipment set status = '$new_status' where sh_id = $sh_id";
        $result=$connect->query($sql);
        if($result)echo"status updated!";
        else echo "failed to update status";
    }
    $connect->close();
?>