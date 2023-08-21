<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./Css/FormStyling.css" /> -->
    <link rel="stylesheet" href="./Css/footer.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Contact</title>
    <style>
      body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .item1-1 {
      margin-top: 0;
    }

    .get-data {
      display: flex;
      justify-content: space-between;
    }

    .left-data, .right-data {
      flex: 1;
      padding: 10px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="tel"],
    input[type="date"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    select {
      padding: 8px 4px; /* To align with input fields */
    }

    .total {
      display:none;
      text-align: center;
      margin-top: 20px;
    }

    #btn {
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      margin:0 auto ;
      border-radius: 4px;
      cursor: pointer;
      display:block;
      transition: background-color 0.3s ease;
    }

    #btn:hover {
      background-color: #0056b3;
    }

    .calculatedTotal {
      margin-top: 10px;
      margin-left:10px;
    }
    </style>
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
  
                <label for="">Shipper id:</label>
                <input type="text" name="s-id" id="">

                <label for="">shippment Weight:</label>
                <input type="text" name="sh-weight" id="">

                <label for="">Category:</label>
                <select name="type" id="payMethod">
                  <option value="Document shipments">Document shipments</option>
                  <option value="Package shipments">Package shipments</option>
                  <option value="Fragile shipments">Fragile shipments</option>
                  <option value="Express shipments">Express shipments</option>
                  <option value="High Value shipments">High Value shipments</option>
                </select>

                <label for="">Shippment status:</label>
                <input type="text" name="status" value="not delivered" readonly>

  
              </div>
                <div class="right-data">

                  <label for="">Place Date:</label>
                  <input type="date" name="p-date" id="">

                  <label for="">Delivery Date:</label>
                  <input type="date" name="d-date" id="">
                  
    

                  <label for="">Receiver Name:</label>
                  <input type="text" name="r-name">
    
                  <label for="">Receiver contact:</label>
                  <input type="tel" name="r-contact" id="">
    
                  <label for="">Receiver Address:</label>
                  <input type="text" name="r-address" id="">

                  <label for="">Payment status</label>

                  <select name="payMethod" id="payMethod">
                    <option value="not received">not received</option>
                    <option value="received">received</option>   
                  </select>                
                

              </div>
                  
  

                <label for="">Receiver Name:</label>
                <input type="text" name="r-name">
  
                <label for="">Receiver contact:</label>
                <input type="tel" name="r-contact" id="">
  
                <label for="">Receiver Address:</label>
                <input type="text" name="r-address" id="">

                <label for="">Payment status</label>

                <select name="payment" id="payment">
                  <option value="received">received</option>
                  <option value="not received">not received</option>
                </select>
            </div>
            
        <div class="total" id="total">
          <label class="calculatedTotal" for="payment_total">Calculated Payment:</label>
                <label  for='txt'>
                      <input style="width:80%" class="calculatedTotal" type="text"name="payment_total" id="payment_total" />
                      $
                  </label>
                  <br>
          
        </div>
        <input type="Button" value="Continue" id="btn" />
      </form>
    </div>

    <script>
    
        $(document).ready(function() {
      $("#btn").click(function() {
        var shWeight = $("input[name='sh-weight']").val();
        var category = $("select[name='type']").val();
        
       
          $.ajax({
            type: "POST",
            url: "processPayment.php",
            data: {
              sh_weight: shWeight,
              category: category
            },
            success: function(response) {
              $("#total").css('display', 'block'); // Show the div
              $("#payment_total").val(response); // Set the received value as the input value
            }
          });
      
      });
    });
    </script>

  
  <?php
    include("footer.php");
  ?>
  </body>
</html>
