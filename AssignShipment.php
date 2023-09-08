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
  ?>




  <div class="box">
      <h2>Select Area</h2>
      <form  method="post">

      <select name="area" id="" value="Select Area">
        <option value="Wapda Town">Wapda Town</option>
        <option value="Satellite Town">Satellite Town</option>
        <option value="Bagbanpura">Bagbanpura</option>
        <option value="Ghanta Ghar">Ghanta Ghar</option>
        <option value="Jinah Road">Jinah Road</option>
        <option value="Model Town">Model Town</option>
        <option value="Garden Town">Garden Town</option>
        <option value="Urdu Bazar">Urdu Bazar</option>
        <option value="People Colony">People Colony</option>
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
        USING (s_id) where customer.address like '$area' and shipment.status like 'in process' ";

        $result = $connect->query($sql);

        if($result->num_rows>0) {
          echo "
          <div class='dashboard_table'>
              
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
                  <td> <a href='assign_to.php?sh_id=$row[sh_id]&area=$area'>Assign to</a></td>
                  
                  </tr>
  
                
                ";
                
                
              }
  
            
           
            echo "
            
            </table>
            </div>";
  
    
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
