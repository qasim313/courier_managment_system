<?php
  include 'CheckifLogin.php';
  include('connection.php');
  
  $sid = $_GET['id'];
  $c_id = $_GET['c_id'];
  

  $sh_id = explode (',',$sid);
  
  
   
  $sql = "select m_id from manager";
  $stmt = $connect->query($sql);
  

  $result = $stmt->FETCH_ASSOC();
  $m_id = $result['m_id'];


  for ($i=0 ; $i<count($sh_id); $i++) {
    # code...
  
    $id = (int)$sh_id[$i];
     
  $sql = "INSERT INTO `assign`(`m_id`, `sh_id`, `c_id`) VALUES ($m_id , $id , $c_id )";
  $connect->query($sql);

  $sql = "UPDATE `shipment` SET `c_id`= $c_id , `status` = 'assign' WHERE sh_id = $id";
  $connect->query($sql);
  }
  echo "<script>alert('Shipment Has been Assigned');</script>";

  echo "<script>location.href='Dashboard.php'</script>";
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

      body {
        display:flex;
        justify-content:center;
        align-items:center;

      }

      div {
        padding:50px 0px;
        width:30%;
        height:auto;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        border: solid black 5px;
        
      }
      p {
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        font-weight:bolder;
        font-size:500;

        
      }
      button {

    width: 120px;
    
    font-weight: bold;
    font-size: 20px;
    height: 40px;
    background-color: black;
    border: none;
    border-radius: 8px;
    box-shadow: black;


    }
    a {
    /* color: #37bc9b; */
    /* color: cornflowerblue; */
    color: white;
    text-decoration: none;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <div>
      <p>Shipment Has Been Assign</p>
      <button><a href="AssignShipment.php">Go Back</a></button>
    </div>
</body>
</html>
 -->
