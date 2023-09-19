<?php
    include 'CheckifLogin.php';

  include('connection.php');
  include('navBar.php');
    if(!isset($_POST['ids'])) {
      echo "<script>alert('please Select Shipment!!!');</script>";
      echo "<script>location.href='AssignShipment.php'</script>";


    }
  
    $r = $_POST['ids'];
    $area=$_REQUEST['area'];

    $data = array();
    

    foreach($r as  $rowName ) {
        $sql = "select * from shipment where sh_id = '$rowName'";
        $res = $connect->query($sql);
        $data [] = $res->fetch_assoc()['sh_id'];
      
    }
    $sh_id = implode(',' , $data);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/TableStyle.css" />

  <title>courier detail for assigning</title>
</head>
<body>


  <?php
    $sql = "select DISTINCT courier.*  FROM courier JOIN assign  USING (c_id) JOIN shipment USING (sh_id) JOIN shipper USING(s_id) JOIN customer USING (s_id) WHERE courier.status like 'active' and customer.address like '%$area%' ";

    $result = $connect->query($sql);

    if ($result->num_rows <= 0) {
      $sql =" SELECT * FROM courier  where c_id not in (SELECT courier.c_id FROM courier natural JOIN assign  ) and courier.status like 'active'";
      $result = $connect->query($sql);
    }

  ?>

  <div class="dashboard_table" style="overflow-x:auto">
              <h1 style="color:black">Courier Detail</h1>
              <table>
                  <tr>
                      <th >Id</th>
                      <th >name</th>
                      <th >status</th>
                      <th >Password</th>
                      <th >contact</th>
                      <th> Address</th> 
                      <th>Assignment</th>    
                  </tr>

 

                <?php


                  if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                      # code...

                      echo "


                      <tr> 
                          <td>$row[c_id]</td>
                          <td>$row[name]</td>
                          <td>$row[status]</td>
                          <td>$row[PASSWORD]</td>
                          <td>$row[contact]</td>
                          <td>$row[address]</td>

                          <td>
                              <a href='AssignmentToCourier.php?c_id=$row[c_id]&id=$sh_id'>  Click Here</a>
                          </td>
                          
                      </tr>
                      
                      ";

                      
                  }

                  } else {

                    echo "<script>alert('No Courier Avaliable Right Now');</script>";
                    echo "<script>location.href='AssignShipment.php'</script>";
                    

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
  include('footer.php');
?>