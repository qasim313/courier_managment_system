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

    .total {
      display: none;
      flex-direction: column;
      align-items: center;
      font-size: 18px;
      margin-top: 10px;
      margin-bottom:20px;
    }

    .total table {
      border-collapse: collapse;
      width: 100%;
      max-width: 500px;
      margin-top: 15px;
    }

    .total th,
    .total td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ddd;
    }

    .total th {
      background-color: #f2f2f2;
    }

    .total tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .total tr:nth-child(odd) {
      background-color: #ffffff;
    }

    .total td.amount,
    .total td.tax,
    .total td.total {
      font-weight: bold;
    }

    .operator {
      font-size: 20px;
      margin: 0 10px;
    }


    select {
      padding: 8px 4px; /* To align with input fields */
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
            </div>
            <div class="total" id="total">
              <table>
                <tr>
                  <th colspan="3">Calculated Payment</th>
                </tr>
                <tr>
                  <th>Amount:</th>
                  <th>Tax</th>
                  <th>Total Amount</th>
                </tr>
                <tr>
                  
                  <td id="actual_amount"></td>
                  <td id="tax"></td>                  
                  <td id="total_amount"></td>
                </tr>
              </table>
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
                      $("#total").css('display', 'flex'); // Show the div
                      var values = response.split("|"); // Split the response into array of values
                      
                      // Update the table cells with the calculated values
                      $("#actual_amount").text(values[0]);
                      $("#tax").text(values[1]);
                      $("#total_amount").text(values[2]);
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
