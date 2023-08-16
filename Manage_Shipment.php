<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Shipment</title>
    <link rel="stylesheet" href="NavStyle.css" />
    <link rel="stylesheet" href="footer.css" />
    <style>
        body {
            padding: 0px;
            margin: 0px;

            background-image: url("pic/backmap2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            font-family: sans-serif !important;
        }
      
        .dashboard_table{
          display: flex;
          align-items: center;
          justify-content: space-around;
          height: auto;
          flex-direction: column;
          padding: 120px 0px;
          
         
        }

  .table-content {
        display: flex;
        flex-direction: column;
        align-items: center;
      
          background: rgba(255, 255, 255, 0.33);
          backdrop-filter: blur(5.1px);
          box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 30px;
          width: 90%;
          padding: 25px 0px;
          border-radius: 22px;
  }
  th,td {
    padding: 20px 20px 20px 30px;

  } 

  td {
    text-align: center;
  }
  h3 {
    font-size: 26px;
  text-transform: uppercase;
  letter-spacing: 1.4px;
  font-weight: 900;
  align-self: center;
  }
  .manage {
    text-decoration: none;
    color: black;
    font-weight: bolder;
    
  }
 
  </style>
</head>
<body>
    <nav class="nav">
      <div class="nav-item">
        <a href="dashboard.php"  >dashboard</a>
        <a href="Add_courier.php" >add Courier</a>
        <a href="ShipmentDetail.php" >add Shippment</a>
        <a href="AssignShipment.php"  >Assign Shippment</a>
        <a  href="Manage_courier.php" >Manage Courier</a>
        <a  href="Manage_shipment.php" class="active">Manage Shippment</a>
      </div>
    </nav>

      <div class="dashboard_table">
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
                <th>Manage</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>1234567890</td>
                <td>123, abc street, xyz city</td>
                <td>John Doe</td>
                <td>1234567890</td>
                <td>123, abc street, xyz city</td>
                <td  class="btn-instance">
                  <a href=""  class="manage">update</a> 
                  <a href=""  class="manage">Delete</a>
                </td>
            </tr>
        </table>
      </div>
    
    
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