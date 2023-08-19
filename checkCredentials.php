<?php

    include ('connection.php');


    $id = $_REQUEST['id'];
    $pass = $_REQUEST['password'];
    
    $sql = "select name from courier where password = '$pass' and c_id = '$id'";
    $result = mysqli_query($connect, $sql);
    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        echo "$row[name]";
    }else{
        $sql1 = "select name from manager where password = '$pass' and m_id = '$id'";
        $result1 = mysqli_query($connect, $sql1);
        if($result1->num_rows>0){
            $row = mysqli_fetch_assoc($result1);
            echo "$row[name]";
        }else{
            echo "<script>alert(\"Incorrect Password\")</script>";
        }
    }


?>