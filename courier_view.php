<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipments of Courier</title>
    <link rel="stylesheet" href="./Css/NavStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/TableStyle.css" />
</head>
<body>
    <?php   
        include ("connection.php");
    ?>

    <nav>
        <ul>
            <li><a href="Dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>DashBoard</a></li>
        <button><a href="">Logout</a></button>
    </nav>

    <div class="dashboard_table">
              <h1 style="color:black">Shippments</h1>
              <table>
                  <tr>
                      <th style="background:black;">Shipment Id</th>
                      <th style="background:black;">Issue Date</th>
                      <th style="background:black;">Delivery Date</th>
                      <th style="background:black;">Reciever's Contact</th>
                      <th style="background:black;">Delivery Status</th>
                      <th style="background:black;">Delivery Location</th> 
                      <th style="background:black;">Update Status</th> 
                  </tr>
                  
              </table>
    </div>
</body>
</html>

<?php
  include ("footer.php");
?>