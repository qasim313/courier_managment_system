
<?php include 'CheckifLogin.php';?>
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
                <input type="text" name="s-name" required>
  
                <label for="">Shipper phone:</label>
                <input type="tel" name="s-ph" id="" required>
  
                <label for="">Shipper Address:</label>
                <input type="text" name="s-address" id="" required>
  
                <label for="">Shipper id:</label>
                <input style="opacity:0.5;font-weight: bold;" type="text" name="s-id" id="" value="auto generated" readonly="read">

                <label for="">shippment Weight:</label>
                <input type="text" name="sh-weight" id="" required>

                <label for="">Category:</label>
                <select name="type" id="payMethod">
                  <option value="Document shipments">Document shipments</option>
                  <option value="Package shipments">Package shipments</option>
                  <option value="Fragile shipments">Fragile shipments</option>
                  <option value="Express shipments">Express shipments</option>
                  <option value="High Value shipments">High Value shipments</option>
                </select>
              </div>
                <div class="right-data">

                  <label for="">Place Date:</label>
                  <input type="date" name="p-date" id="" required>

                  <label for="">Delivery Date:</label>
                  <input type="date" name="d-date" id=""required>
                  
    

                  <label for="">Receiver Name:</label>
                  <input type="text" name="r-name"required>
    
                  <label for="">Receiver contact:</label>
                  <input type="tel" name="r-contact" id=""required>
    
                  <label for="">Receiver Address:</label>
                  <!-- <input type="text" name="r-address" id=""> -->
                  
                  <select name="r-address" id="" value="Select Area">
                    <option value="Wapda Town">Wapda Town</option>
                    <option value="Satellite Town">Satellite Town</option>
                    <option value="Bagbanpura">Bagbanpura</option>
                    <option value="Ghanta Ghar">Ghanta Ghar</option>
                    <option value="Jinah Road">Jinah Road</option>
                    <option value="Model Town">Model Town</option>
                    <option value="Garden Town">Garden Town</option>
                    <option value="Urdu Bazar">Urdu Bazar</option>
                    <option value="People Colony">People Colony</option>
                  </select>

                  <label for="">Shippment status:</label>
                  <input type="text" name="status" value="in process" readonly>
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
        //get the whole form data
        //check if any field is empty
        if (
          $("input[name='s-name']").val() == "" ||
          $("input[name='s-ph']").val() == "" ||
          $("input[name='s-address']").val() == "" ||
          $("input[name='sh-weight']").val() == "" ||
          $("input[name='p-date']").val() == "" ||
          $("input[name='d-date']").val() == "" ||
          $("input[name='r-name']").val() == "" ||
          $("input[name='r-contact']").val() == "" ||
          $("input[name='r-address']").val() == ""
        ) {
          alert("Please fill all the fields");
          return false;
        }
        if("input[name='sh-weight']" < 0){
          alert("Shippment weight cannot be negative");
          return false;
        }
        if ("input[name='s-ph']".length < 11) {
          alert("Phone number must be 11 digits");
          return false;
        }
        if ("input[name='r-contact']".length < 11) {
          alert("Phone number must be 11 digits");
          return false;
        }
        if ("input[name='s-ph']".length > 11) {
          alert("Phone number must be 11 digits");
          return false;
        }
        if ("input[name='r-contact']".length > 11) {
          alert("Phone number must be 11 digits");
          return false;
        }
        //check if p-date is smaller than d-date
        if (
          $("input[name='p-date']").val() > $("input[name='d-date']").val()
        ) {
          alert("Place date cannot be greater than delivery date");
          return false;
        }
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
                      $("#btn").val("Place Order");
                      $("#btn").css("background-color","green");
                      $("#btn").attr("type", "submit");
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
