<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Shipment</title>
    <link rel="stylesheet" href="./css/NavStyle.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/TableStyle.css" />
    <style>
      th{ 
        padding: 10px 10px;
      }

        body {
            padding: 0px;
            margin: 0px;

            background-image: url("pic/backmap2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: sans-serif !important;
        }
      
        .dashboard_table{
          display: flex;
          align-items: center;
          justify-content: space-around;
          height: auto;
          flex-direction: column;
          padding: 40px 0px;
          
         
        }

        td a {
            text-decoration :none;
            color:black;
            font-size:larger;
            font-weight:bold; 
        }
        tr th {
            text-transform :uppercase;
        }
        tr td {
            font-weight:bold; 
        }

  h3 {
    font-size: 26px;
  text-transform: uppercase;
  letter-spacing: 1.4px;
  font-weight: 900;
  align-self: center;

  }
  .manage {
    text-decoration: none;
    color: black;
    font-weight: bolder;
    
  }
 
  </style>
</head>
<body>

<?php
 include 'CheckifLogin.php';
  include ("navBar.php");
  include ("connection.php");
  //sh_id	weight	category	issue_date	delievery_date	m_id	s_id	c_id
  $sql="SELECT * FROM `shipment`";
  $result=mysqli_query($connect,$sql);
  if($result->num_rows>0){
    echo '
    <div class="dashboard_table">
    <div class="table-content">
    <h3>Manage Shipment</h3>
    <table>
    <tr>
        <th>Shipment ID</th>
        <th>Weight</th>
        <th>Category</th>
        <th>Issue Date</th>
        <th>Delievery Date</th>
        <th>Manager ID</th>
        <th>Shipper ID</th>
        <th>Customer ID</th>
        <th>Manage</th>
    </tr>';
    
    while($row=mysqli_fetch_assoc($result)){
      $sh_id=$row['sh_id'];
      $weight=$row['weight'];
      $category=$row['category'];
      $issue_date=$row['issue_date'];
      $delievery_date=$row['delievery_date'];
      $m_id=$row['m_id'];
      $s_id=$row['s_id'];
      $c_id=$row['c_id'];
      
      echo '  

            <tr>
                <td>'.$sh_id.'</td>
                <td>'.$weight.'</td>
                <td>'.$category.'</td>
                <td>'.$issue_date.'</td>
                <td>'.$delievery_date.'</td>
                <td>'.$m_id.'</td>
                <td>'.$s_id.'</td>
                <td>'.$c_id.'</td>
                <td  class="btn-instance">
                <a href="updateShipment.php?sh_id='.$row['sh_id'].'&weight='.$row['weight'].'&category='.$row['category'].'&issue_date='.$row['issue_date'].'&delievery_date='.$row['delievery_date'].'&m_id='.$row['m_id'].'&s_id='.$row['s_id'].'&c_id='.$row['c_id'].'">Update</a>
                <a href="deleteShipment.php?sh_id='.$row['sh_id'].'">Delete</a>
                </td>
            </tr>';
    }
        echo "</table>";

  }
    
?>

</body>
</html>


