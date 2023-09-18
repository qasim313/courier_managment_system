<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/TableStyle.css" />

    

    
    <style> 

    .box{
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      margin-bottom:50px;
      width:100%;

    }

    .box form {
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      width:50%;
      
      

    }

    .box form select {

      width:80%;
      height:50px;
      border : solid black 3px;
      border-radius:5px;
      font-size:200;
      font-weight:bold;
    }
    input {
      height:50px;
      width:20%;
      border :solid black 3px ;
      font-size:300;
      font-weight:bold;
      border-radius:10px;
      color:white;
      background:black;
    }
  
    </style>

    <title>Assign Shippment</title>
  </head>
  <body>
  <?php
    include ("navBar.php");
    include ("connection.php");

    $sql= " select distinct customer.address from customer join shipper using(s_id) join shipment using(s_id) where status like 'in process' ";

        

        $result = $connect->query($sql);
        if ($result->num_rows<=0) {
          echo "<script>alert('No shipment Found to Assign');</script>";
          echo "<script>location.href='dashboard.php'</script>";
        }
  ?>




  <div class="box">
      <h2>Select Area</h2>
      <form  method="post">

      <select name="area" id="" value="Select Area">
        <?php
        

        while ($row=$result->fetch_assoc())
          echo "<option value='$row[address]'>$row[address]</option>";
        
        ?>
      </select>
      <br>
      <input type="submit" value="Enter" name="submit">

      </form>
  </div>


      <?php
       include 'CheckifLogin.php';
      if(isset($_POST['submit'])){
        $area = $_REQUEST['area'];
  
        $sql = "select  shipper.s_id , customer.address , customer.phone , 
        customer.name , shipment.sh_id , shipment.weight , shipment.category , 
        shipment.status  from shipper join customer USING (s_id) join shipment 
        USING (s_id) where customer.address like '%$area' and shipment.status like 'in process' ";

        $result = $connect->query($sql);

        if($result->num_rows>0) {

          echo "
          <form action='assign_to.php' method='post'>
          <div class='dashboard_table' style='overflow-x:auto'>
              
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
                  <th>Select</th>
              </tr> ";
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
                  <td> <input type='checkbox' name='ids[]' value='$row[sh_id]'></td>
                  
                  </tr>
  
                
                ";
                
                
              }
  
            
           
            echo "
            <input style='display:none;' type='text' name='area' value='$area'>
             
            
            </table>
            <br>
            <div class='box'><input type='submit' value='assign' name='assign'></div>
            </div>
            <form>
            ";
  
    
        }else {
          echo "<script>alert('No Shipment Found from your desired area');</script>";
        }

        }

       
      
      ?>


  

         

 
  </body>
</html>

<?php
  include('footer.php');
?>
