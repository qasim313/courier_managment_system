<!-- <?php
    include('connection.php');
    include('navBar.php');
  
    if(isset($_POST['submit'])){
      $area = $_REQUEST['area'];

      $sql = " select shipper.s_id , customer.address , customer.phone , customer.name , shipment.sh_id , shipment.weight , shipment.category , shipment.status  from shipper join customer USING (s_id) join shipment USING (s_id) where customer.address like '$area' ";

      

      $result = $connect->query($sql);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/TableStyle.css" />

   
    <title>Shipments</title>
</head>
<body>

    


<div class='dashboard_table'>
        <div class='table-content'>
            <h3>Manage Shipment</h3>
            <table>
            <tr>
                <th>Shipper ID</th>
                <th>Delivery Location</th>
                <th>Contact</th>
                <th>Customer Name</th>
                <th>Shipment ID</th>
                <th>Supplier weight</th>
                <th>Delivery status</th>
                <th>Category</th>
                <th>Assign</th>
            </tr>
        
        <?php

          
            while($row=$result->fetch_assoc()){

        
              echo "
                <tr>
                <td>$row[s_id]</td>
                <td>$row[address]</td>
                <td>$row[phone]</td>
                <td>$row[name]</td>
                <td>$row[sh_id]</td>
                <td>$row[weight]</td>
                <td>$row[status]</td>
                <td>$row[category]</td>
                <td> <a href='assign_to.php?sh_id=$row[sh_id]'>Assign to</a></td>
                
                </tr>

              
              ";
            }

            ?>
         

          </div>
          </div>
          </table>
    
</body>
</html>
    

    
           
          
         -->
