<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/FormStyling.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/NavStyle.css" />

    <title>Contact</title>
  </head>
  <body>
  <?php
  include ("navBar.php");
?>
    <div class="container">
      <form action="ShippementData.php" class="item1" method="post">
        <h3 class="item1-1">Shippment Detail</h3>

            <div class="get-data">
              <div class="left-data">
                <label for="">Shipper Name:</label>
                <input type="text" name="s-name">
  
                <label for="">Shipper phone:</label>
                <input type="tel" name="s-ph" id="">
  
                <label for="">Shipper Address:</label>
                <input type="text" name="s-address" id="">
  
                <label for="">Shippment id:</label>
                <input type="text" name="sh-id" id="">

                <label for="">shippment Weight:</label>
                <input type="text" name="sh-weight" id="">

                <label for="">Category:</label>
                <input type="text" name="type" id="">

                <label for="">Shippment status:</label>

                <select name="payMethod" id="payMethod">
                  <option value="active">active</option>
                  <option value="inactive">inactive</option>
                </select>

                
  
              </div>
              <div class="right-data">

                <label for="">Place Date:</label>
                <input type="date" name="fdate" id="">

                <label for="">Delivery Date:</label>
                <input type="date" name="ddate" id="">
                
  

                <label for="">Receiver Name:</label>
                <input type="text" name="r-name">
  
                <label for="">Receiver contect:</label>
                <input type="tel" name="r-id" id="">

                <label for="">Receiver Email:</label>
                <input type="email" name="mail" id="">
  
                <label for="">Receiver Address:</label>
                <input type="text" name="r-location" id="">

                <label for="">Payment status</label>

                <select name="payMethod" id="payMethod">
                  <option value="received">received</option>
                  <option value="not received">not received</option>
                </select>
            </div>

              
            </div>
        <br />
        <input type="submit" value="Submit" id="btn" />
      </form>
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
