
<?php   
 include 'CheckifLogin.php';
    include 'connection.php';
    
    $sh_id = $_GET['sh_id'];    
    $weight = $_GET['weight'];
    $category = $_GET['category'];
    $issue_date = $_GET['issue_date'];
    $delievery_date = $_GET['delievery_date'];
    $m_id = $_GET['m_id'];
    $s_id = $_GET['s_id'];
    $c_id = $_GET['c_id'];

?>

<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="./Css/CourierFormStyling.css" />

    <title>Upadte_Shipment</title>
</head>
<body>
<div class="container">
      <form method="post" class="item1">
        <h3 class="item1-1">Upadte Detail</h3>

        <label for="id">Shipment id:</label>
        <input type="text" name="id" id="id" class="item1-2" value ="<?php echo $sh_id; ?>"  readonly/>
        <label for="weight">Shipment Weight:</label>
        <input type="text" name="weight" id="weight" class="item1-2" value ="<?php echo $weight; ?>"  />
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" class="item1-2"  value ="<?php echo $category; ?>" readonly/>
        <label for="issue_date">Issue Date:</label>
        <input type="date" name="issue_date" id="" value ="<?php echo $issue_date; ?>">
        <label for="delievery_date">Delievery Date:</label>
        <input type="date" name="delievery_date" id="" value ="<?php echo $delievery_date; ?>">
        <label for="m_id">Manager id:</label>
        <input type="text" name="m_id" id="" value ="<?php echo $m_id; ?>">
        <label for="s_id">Shipper id:</label>
        <input type="text" name="s_id" id="" value ="<?php echo $s_id; ?>">
        <label for="c_id">Courier id:</label>
        <input type="text" name="c_id" id="" value ="<?php echo $c_id; ?>">

        <br />
        <input type="submit" value="Submit" id="btn" name="enter" />
      </form>
    </div>

    <?php
       
        if (isset($_POST['enter'])) {
            $sh_id = $_POST['id'];
            $weight = $_POST['weight'];
            $category = $_POST['category'];
            $issue_date = $_POST['issue_date'];
            $delievery_date = $_POST['delievery_date'];
            $m_id = $_POST['m_id'];
            $s_id = $_POST['s_id'];
            $c_id = $_POST['c_id'];
           //just want to update the weight and delievery date
            $sql = "UPDATE `shipment` SET `weight`='$weight',`category`='$category',`issue_date`='$issue_date',`delievery_date`='$delievery_date' WHERE `sh_id`='$sh_id'";
            $result = $connect->query($sql);
            if ($result) {
                echo "<script>alert('Data Updated Successfully')</script>";
                echo "<script>window.location.href='Manage_Shipment.php'</script>";
            } else {
                echo "<script>alert('Data Not Updated Successfully')</script>";
                echo "<script>window.location.href='Manage_Shipment.php'</script>";
            }
        }
    ?>
</body>
</html>













