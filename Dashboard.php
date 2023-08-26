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
            display: inline-block;
            width: calc(33.33% - 20px);
            background-color: white;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .number {
            font-size: 36px;
            margin-bottom: 5px;
            color: black;
        }

        .title {
            font-size: 18px;
            color: #666;
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
            <?php
            $sql ="select * from shipment";
            $r = $connect->query($sql);
            $num1 = $r->num_rows;
            ?>
            <div class="content">
                <h2 class='number'><?php echo "$num1" ?></h2>
                <h3 class='title'>Total Shipments</h3>
            </div>
        </div>
        <div class="card">
            <?php
            $sql ="select * from shipment where status like 'd%'";
            $r = $connect->query($sql);
            $num2 = $r->num_rows;
            ?>
            <div class="content">
                <h2 class='number'><?php echo "$num2" ?></h2>
                <h3 class='title'>Delivered Shipments</h3>
            </div>
        </div>
        <div class="card">
            <?php
            $sql ="SELECT * FROM  shipment WHERE `status` like 'assign' ";
            $r = $connect->query($sql);
            $num3 = $r->num_rows;
            ?>
            <div class="content">
                <h2 class='number'><?php echo "$num3" ?></h2>
                <h3 class='title'>Assigned Shipments</h3>
            </div>
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