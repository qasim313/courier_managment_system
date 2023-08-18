<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/CourierFormStyling.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/NavStyle.css" />

    
    <title>Contact</title>
  </head>
  <body>
   <nav class="nav">
      <div class="nav-item">
        <a href="dashboard.php"  >dashboard</a>
        <a href="Add_courier.php" class="active" >add Courier</a>
        <a href="ShipmentDetail.php" >add Shippment</a>
        <a href="AssignShipment.php"  >Assign Shippment</a>
        <a  href="Manage_courier.php" >Manage Courier</a>
        <a  href="Manage_shipment.php" >Manage Shippment</a>
      </div>
    </nav>

    <div class="container">
      <form action="courierdta.php" class="item1">
        <h3 class="item1-1">Courier Detail</h3>

        <label for="id">Courier id:</label>
        <input type="text" name="id" id="id" class="item1-2" />
        <label for="name">Courier Name:</label>
        <input type="text" name="name" id="name" class="item1-2" />
        <label for="phone">Contect no:</label>
        <input type="tel" name="ph" id="ph" class="item1-2" />
        <label for="location">Address:</label>
        <input type="text" name="location" id="">
        <label for="password">password:</label>
        <input type="text" name="password" id="">

        <label for="">status:</label>
        <select name="status" id="status">
          <option value="active">active</option>
          <option value="inactive">inactive</option>
        </select>


                


        <br />
        <input type="submit" value="Submit" id="btn" />
      </form>
    </div>

    <footer>
      <div class="footer-content">
        <h1>Company name</h1>
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
