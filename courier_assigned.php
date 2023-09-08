<html>
<head>
    <title>insert Assign</title>
</head>
<link rel="stylesheet" href="./css/NavStyle.css" />
<link rel="stylesheet" href="./css/TableStyle.css" />



   
<body >

 <?php
  include 'CheckifLogin.php';
  include ("connection.php");
  include ("navBar.php");
  

  $sh_id = $_GET['sh_id'];
  $c_id = $_GET['c_id'];
  $m_id = $_GET['m_id'];
  

  $sql="insert into assign(m_id,sh_id,c_id,description) values ('$m_id','$sh_id','$c_id','Shipment Assigned')";
  $result = mysqli_query($connect,$sql);
  if($result){
    echo '<script>alert("Shipment Assigned Successfully")</script>';
  }
  else{
    echo '<script>alert("ERROR !!!!! Shipement Not Assigned")</script>';
  }


  ?>