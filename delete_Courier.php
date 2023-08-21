<?php
    include('connection.php');

    $id = $_GET['c_id'];

    $sql = "DELETE FROM `courier` WHERE  c_id='$id' ";
    $result =$connect->query($sql);
    if ($result) {
        echo "Deletion Sucessful";
        echo "<script>location.href='courier.php'</script>";
    } else {
        echo "Somethig Wrong";
        echo "<script>location.href='courier.php'</script>";
    }
?>