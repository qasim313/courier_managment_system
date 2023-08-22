<html>
<head>
    <title>Dashboard</title>
</head>
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
          /* color: #37bc9b; */

      }
      
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      } 
      
    </style>
<body >

 <?php
  include 'CheckifLogin.php';
  include ("connection.php");
  include ("navBar.php");
  ?> 

      <main> 
          <div class="container">
              <div class="card">
                  <h2>Total Shipments</h2>
                  <?php
                      $sql ="select * from shipment";
                      $r = $connect->query($sql);
                      $num = $r->num_rows;
                      
                      echo "<h2>$num </h2>";
                  ?>

              </div>
              <div class="card">
                  <h2>Delivered Shipments</h2>
                  <?php
                        $sql ="select * from shipment where status like 'd%'";
                        $r = $connect->query($sql);
                        $num = $r->num_rows;
                        
                        echo "<h2>$num </h2>";
                  ?>
              </div>
              <div class="card">
                  <h2>Assigned Shipments</h2>
                  <?php
                      $sql ="select * from shipment where c_id is not null ";
                      $r = $connect->query($sql);
                      $num = $r->num_rows;
                      echo "<h2>$num</h2>";
                  ?>

              </div>
          </div>
          <div class="dashboard_table">
              <h1 >Shippments</h1>

              <?php


            echo "
              <table>
                  <tr>
                      <th >Id</th>
                      <th >delivery Status</th>
                      <th >delivery Date</th>
                      <th >Shipper name</th>
                      <th >Receiver Name</th>
                      <th >Contact</th>
                      <th >Delivery Location</th>
                      
                  </tr>
                  ";



            

                        $sql ="SELECT shipment.* ,customer.phone ,customer.address , customer.name ,shipper.name as sname FROM `shipment`  JOIN shipper USING (s_id) JOIN customer USING(s_id); ";

                        $result = $connect->query($sql);

                        while ( $row = $result->fetch_assoc()) {
                           
                        
                            echo "

                            <tr>
                                <td>$row[sh_id]</td>
                                <td>$row[status]</td>
                                <td>$row[delivery_date]</td>
                                <td>$row[sname]</td>
                                <td>$row[name]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                               
                            
                            <tr>
                            
                            ";



                            $sql ="select * from shipment";




                        }
                  
                  ?>
              </table>


          </div>
      </main>

 


      

</body>
</html>

<?php
  include ("footer.php");
?>