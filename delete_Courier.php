<?php
 include 'CheckifLogin.php';
    include('connection.php');

    $id = $_GET['c_id'];


    $sql = " select * from courier join assign using (c_id) where c_id = $id"; 
    $result =$connect->query($sql);

    if ($result->num_rows > 0 ) {

        echo "<script>alert('cant delete courier have pending Shipments')</script>";
        echo "<script>location.href='Manage_Courier.php'</script>";
        exit();
    }


    
    $sql = "DELETE FROM `courier` WHERE  c_id='$id' ";

    $result =$connect->query($sql);
    if ($result) {
        echo "Deletion Sucessful";
        echo "<script>location.href='Manage_Courier.php'</script>";
    } else {
        echo "Somethig Wrong";
        echo "<script>location.href='Manage_Courier.php'</script>";
    }
?>