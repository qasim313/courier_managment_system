<?php
    session_start();
    include ('connection.php');
    // echo "login";

    $id = $_REQUEST['id'];
    $pass = $_REQUEST['password'];
    $role = $_REQUEST['role'];

    if ($role == 'courier') {
        $sql = "select name from courier where password = '$pass' and c_id = '$id'";
        $result = mysqli_query($connect, $sql);


        if($result && $result->num_rows == 1){
            
            $row = mysqli_fetch_assoc($result);
            $_SESSION['authenticated'] = true;
            $_SESSION['courier'] = true;
            header("Location: courier_view.php?value=$id"); 
            exit();
            
        } else {
            echo "<script>
            alert(\"Uesr Not Found\");
            location.href=\"login.html\";
            </script>";
        }

    }else{
        $sql1 = "select name from manager where password = '$pass' and m_id = '$id'";
        $result1 = mysqli_query($connect, $sql1);
        if($result1 && $result1->num_rows == 1){
            $row = mysqli_fetch_assoc($result1);
            $_SESSION['authenticated'] = true;
            $_SESSION['courier'] = false;
            header("Location: dashboard.php"); 
            exit();
            
        }else{
            echo "<script>
            alert(\"Uesr Not Found\");
            location.href=\"login.html\";
            </script>";

        }
    }


?>