
<?php
    include('connection.php');
    include('CheckIfLogin.php');
    if (isset($_POST['sh_id']) && isset($_POST['new_status'])) {
        $sh_id = $_POST['sh_id'];
        $new_status = $_POST['new_status'];
        $sql = "update shipment set status = '$new_status' where sh_id = $sh_id";
        $result=$connect->query($sql);
        if($result)echo"status updated!";
        else echo "failed to update status";

        $sql = "DELETE FROM `assign` JOIN shipment USING (sh_id) WHERE shipment.status like 'delivered'" ;
        $result=$connect->query($sql);

    }


    $connect->close();
?>
