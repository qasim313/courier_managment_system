<!DOCTYPE html>
<head>
    <title>Manage Shipment</title>
    <link rel="stylesheet" href="./css/TableStyle.css" />
</head>
<body>

<?php
 include 'CheckifLogin.php';
  include ("connection.php");
  include ("navBar.php");
  
  $sql="SELECT * FROM `shipment`";
  $result=mysqli_query($connect,$sql);
  //sh_id	weight	category	issue_date	delievery_date	m_id	s_id	c_id
  ?>
    <div class="dashboard_table" style="overflow-x:auto">

    <h1 style="color:black">Manage Shipment</h1>
    <table>
    <tr>
        <th>Shipment ID</th>
        <th>Weight</th>
        <th>Category</th>
        <th>Issue Date</th>
        <th>Delievery Date</th>
        <th>Status</th>
        <th>Shipper ID</th>
        <th>Courier ID</th>
        <th>Update</th>
        <!-- <th>Delete</th> -->
    </tr>

  <?php
    while($row=mysqli_fetch_assoc($result)){
      $sh_id=$row['sh_id'];
      $weight=$row['weight'];
      $category=$row['category'];
      $issue_date=$row['issue_date'];
      $delievery_date=$row['delivery_date'];//get the status as well
      $status=$row['status'];
      $m_id=$row['m_id'];
      $s_id=$row['s_id'];
      $c_id=$row['c_id'];
      if($c_id==NULL){
        $c_id="Not Assigned";
      }
      
      echo '  

            <tr>
                <td>'.$sh_id.'</td>
                <td>'.$weight.'</td>
                <td>'.$category.'</td>
                <td>'.$issue_date.'</td>
                <td>'.$delievery_date.'</td>
                <td>'.$status.'</td>
                <td>'.$s_id.'</td>
                <td>'.$c_id.'</td>
                <td  class="btn-instance">
                <a href="updateShipment.php?sh_id='.$row['sh_id'].'&weight='.$row['weight'].'&category='.$row['category'].'&issue_date='.$row['issue_date'].'&delivery_date='.$row['delivery_date'].'&m_id='.$row['m_id'].'&s_id='.$row['s_id'].'&c_id='.$row['c_id'].'&status='.$row['status'].'">Update</a>
                </td>
                
            </tr>';
    }
?>
</table>
</div>
<?php
             $connect->close(); 
        ?>

</body>
</html>
<?php
include 'footer.php';
?>

 


