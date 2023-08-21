<?php
    include 'CheckifLogin.php';

  include('connection.php');
  include('navBar.php');

  $sh_id = $_GET['sh_id'];
  $area = $_GET['area'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/TableStyle.css" />

  <title>Document</title>
</head>
<body>


  <?php
    $sql = "SELECT * from courier WHERE c_id in (select DISTINCT courier.c_id  FROM courier JOIN assign  USING (c_id) JOIN shipment USING (sh_id) JOIN shipper USING(s_id) JOIN customer USING (s_id) WHERE courier.status like 'active' and customer.address like '$area' and shippment.status like 'not%')  ";

    $result = $connect->query($sql);

    if ($result->num_rows <= 0) {
      $sql ="select * from courier where c_id not in ( SELECT c_id FROM courier NATURAL JOIN assign join shipment using (sh_id) where lower(shipment.status) like 'd%')";
      $result = $connect->query($sql);
    }

  ?>

  <div class="dashboard_table">
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
                                <a href='AssignmentToCourier.php?c_id=$row[c_id]&sh_id=$sh_id'> assign </a>
                            </td>
                            
                        </tr>
                        
                        ";

                        
                    }


                    
                ?>


            </table>
        </div>


        <?php
             $connect->close(); 
        ?>
  
</body>
</html>