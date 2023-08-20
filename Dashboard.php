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
  include ("connection.php");
  include ("navBar.php")
  ?> 

      <main> 
          <div class="container">
              <div class="card">
                  <h2>Total Shipments</h2>
                  <?php
                      $num = 1;
                      echo "<h2>$num </h2>";
                  ?>

              </div>
              <div class="card">
                  <h2>Delivered Shipments</h2>
                  <?php
                      $num = 1;
                      echo "<h2>$num </h2>";
                  ?>
              </div>
              <div class="card">
                  <h2>Assigned Shipments</h2>
                  <?php
                      $num = 1;
                      echo "<h2>$num</h2>";
                  ?>

              </div>
          </div>
          <div class="dashboard_table">
              <h1 style="color:black">Shippments</h1>
              <table>
                  <tr>
                      <th style="background:black;">Id</th>
                      <th style="background:black;">delivery Status</th>
                      <th style="background:black;">delievery Date</th>
                      <th style="background:black;">Contect</th>
                      <th style="background:black;">Delivery Location</th>
                      <th style="background:black;">Courier id</th>
                      <th style="background:black;">Courier Name</th> 
                  </tr>
                  
              </table>


          </div>
      </main>

 


      

</body>
</html>

<?php
  include ("footer.php");
?>