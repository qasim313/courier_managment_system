<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/FormStyling.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/NavStyle.css" />


    <title>Area</title>
  </head>
  <body>
    <nav class="nav">
      <div class="nav-item">
        <a href="dashboard.php"  >dashboard</a>
        <a href="Add_courier.php" >add Courier</a>
      <a href="ShipmentDetail.php" >add Shippment</a>
      <a href="AssignShipment.php" class="active" >Assign Shippment</a>
      <a  href="Manage_courier.php" >Manage Courier</a>
      <a  href="Manage_shipment.php" >Manage Shippment</a>
      </div>
    </nav>
    <div class="container">
      <form action="" class="item1" method="post">
        <h3 class="item1-1">Assign Shippment</h3>

        <select name="" id="area-select">
            <!-- <option value="">Select Area</option> -->
            <option value="">Jannah road</option>
            <option value="">Ghanta ghar</option>
            <option value="">Alam chok</option>
            <option value="">College Road</option>
            <option value="">Model Town</option>
            <option value="">Wapda Town</option>
            <option value="">Awan Chok</option>
            <option value="">Pindi bypass</option>
            <option value="">Satlite Town</option>
            <option value="">People colony</option>
        </select>

            
        <br />
        <input type="submit" value="Search" onclick="showTable()" id="btn" />
      </form>
    </div>

    <!-- <div class="dashboard_table" id="dashboard_td" >
      <div  class ="table-content">
        <h3>Delivery Details</h3>
      <table>
        
       
          <tr>
              <th>Shipment id</th>
              <th>Shipment Name</th>
              <th>Reciever Name</th>
              <th>Delivery Date</th>
              <th>Delivery Status</th>
              <th>Amount Status</th>
              <th>Address</th>
          </tr>
          <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>1234567890</td>
              <td>123, abc street, xyz city</td>
              <td>John Doe</td>
              <td>1234567890</td>
              <td>123, abc street, xyz city</td>
          </tr>
      </table>
    </div>
  
   -->
  </div>
    <footer>
      <div class="footer-content">
        <h1>company name</h1>
        <p>
          <b>company name</b>
          456 Park Avenue,
          Lahore, lhr,
          Pakistan,
          10001
        </p>
        <div class="footer-icon">
          <a href="#">
            <img src="pic/facebook.png" alt="" />
          </a>
          <a href="#">
            <img src="pic/telegram.png" alt="" />
          </a>
          <a href="#">
            <img src="pic/instagram.png" alt="" />
          </a>
          <a href="#">
            <img src="pic/linkedin.png" alt="" />
          </a>
          <a href="#">
            <img src="pic/youtube.png" alt="" />
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
