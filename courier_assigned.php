<html>
<head>
    <title>Dashboard</title>
</head>
<link rel="stylesheet" href="./css/NavStyle.css" />
<link rel="stylesheet" href="./css/TableStyle.css" />



    <style>

      .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: auto;
        }

        .card {
          display :inline-flex;
          justify-content: space-between;
          padding : 10px 8px ;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
          border-radius: 5px;
          margin: 10px;
          height: 20vh;
          color: #37bc9b;

      }
      
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      
    </style>
<body >

 <?php
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