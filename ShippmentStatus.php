
<!DOCTYPE html>
<html>
<head>
  <title>Courier Tracking System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN for icons -->
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    
    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 50px;
    }
    
    .card {
      width: 400px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 20px;
    }
    
    .card-title {
      font-size: 24px;
      color: black;
      margin-bottom: 20px;
    }
    
    .phase-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .phase {
      display: flex;
      flex-direction: column;
      align-items: center;
      color: rgb(226, 226, 216);
    }
    
    .phase-name {
      margin-top: 10px;
      font-size: 16px;
      color:  rgb(0, 0, 0);
      text-align: center;
    }
    
    .tick {
      margin-top: 10px;
      color: black;
    }
    
    .item-info {
      font-size: 16px;
      color:  rgb(0, 0, 0);
    }
    p{
      margin-left:5px;
    }
  </style>
</head>
<body>
  <?php
  include("Connection.php");
    // Track ID received from the previous page
    $trackId = $_POST['track_id'];
    // if(empty($trackId)){echo "empty";}
    if(!isset($trackId) || empty($trackId)){
      header("Location: index.html");
      exit();
    }
    $sql = "select * from shipment where sh_id = '$trackId'";    
    $result = $connect->query($sql);
    if(mysqli_num_rows($result) < 1){
      echo "<script>alert('No Shipment found!'); window.location.href = 'index.html';</script>";
      exit();
    }

    $row = $result->fetch_assoc();
    $sql1 = "select name from shipper where s_id = $row[s_id]";
    $shipper_name = ($connect->query($sql1))->fetch_assoc();
    // var_dump($shipper_name);
    // Simulated data for the courier tracking information
    $trackingInfo = array(
      'status' => $row['status'],
      'in_transit' => true ,
      'out_for_delivery' => !($row['c_id'] === NULL),
      'delivered' => ($row['status'] === 'delivered'),
      'category' => $row['category'],
      'item_weight' => $row['weight'],
      'shipment_id' => $row['sh_id'],
      'customer_name' => $shipper_name['name'],
      'order_date' => $row['issue_date'],
      'estimated_delivery_date' => $row['delivery_date']
    );
  ?>
  
  <div class="container">
    <div class="card">
      <h2 class="card-title"><?php echo $trackingInfo['status']; ?></h2>
      <div class="phase-container">
        <div class="phase">
          <i class="fas <?php echo $trackingInfo['in_transit'] ? 'fa-check-circle  fa-3x tick' : 'fa-circle  fa-3x'; ?>""></i>
          <span class="phase-name">In Transit</span>
        </div>
        <div class="phase">
        <i class="fas <?php echo $trackingInfo['out_for_delivery'] ? 'fa-check-circle  fa-3x tick' : 'fa-circle  fa-3x'; ?>""></i>
          <span class="phase-name">Out for Delivery</span>
        </div>
        <div class="phase">
        <i class="fas <?php echo $trackingInfo['delivered'] ? 'fa-check-circle  fa-3x tick' : 'fa-circle  fa-3x'; ?>""></i>
          <span class="phase-name">Delivered</span>
        </div>
      </div>
    </div >
    
    <div class="card">
      <h1 class="card-title">Item Details</h1>
      <p class="item-info">Customer Name: <?php echo $trackingInfo['customer_name']; ?></p>
      <p class="item-info">Category: <?php echo $trackingInfo['category']; ?></p>
      <p class="item-info">Item Weight: <?php echo $trackingInfo['item_weight']; ?></p>
      <p class="item-info">Shipment ID: <?php echo $trackingInfo['shipment_id']; ?></p>
      <p class="item-info">Order Date: <?php echo $trackingInfo['order_date']; ?></p>
      <p class="item-info">Est. Delivery Date: <?php echo $trackingInfo['estimated_delivery_date']; ?></p>
    </div>
  </div>

  
  <script>
  </script>
</body>
</html>
