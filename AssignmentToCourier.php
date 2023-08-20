<?php

  include('connection.php');
  include('navBar.php');
  $sh_id = $_GET['sh_id'];
  $c_id = $_GET['c_id'];
   
  $sql = "select m_id from manager";
  $stmt = $connect->query($sql);

  $result = $stmt->FETCH_ASSOC();
  $m_id = $result['m_id'];

  $sql = "INSERT INTO `assign`(`m_id`, `sh_id`, `c_id`) VALUES ($m_id , $sh_id , $c_id )";
  $connect->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
       

      
    ?>
</body>
</html>