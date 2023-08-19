<html>
<head>
    <title>Dashboard</title>
</head>
<link rel="stylesheet" href="./css/NavStyle.css" />
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
          color: #37bc9b;

      }
      
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      

    
      
    </style>
<body >

 <?php
 //sh_id	weight	category	issue_date	delievery_date	m_id	s_id	c_id
  //include ("navBar.php");
  include ("connection.php");
?> 

<nav>
        <ul>
          <li><a href="Dashboard.php">DashBoard</a></li>
          <li><a href="AssignShipment.php">Assign</a></li>
          <li><a href="#">Add</a>
            <ul>
              <li><a href="ShipmentDetail.php">Shippment</a></li>
              <li><a href="Add_Courier.php">Courier</a></li>
            </ul>
          </li>
          <li><a href="#">Manage</a>
              <ul>
                  <li><a href="Manage_Shipment.php">Shippment</a></li>
                  <li><a href="Manage_Courier.php">Courier</a></li>
              </ul>
          </li>
        </ul>
        <button><a href="">Logout</a></button>
      </nav>

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
              <h1>Recent Dileveries</h1>
              <table>
                  <tr>
                      <th>Shippment ID</th>
                      <th>Customer Name</th>
                      <th>Customer Phone</th>
                      <th>Customer Address</th>
                      <th>Shippment Status</th>
                      <th>Shippment Date</th>
                      <th>Delivery Date</th>
                      <th>Delivery Status</th>
                      
                  </tr>
                  
              </table>


          </div>
      </main>

 


      

</body>
</html>

<?php
  include ("connection.php");
  include ("footer.php");
    


?>