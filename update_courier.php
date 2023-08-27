
<?php
    include('CheckIfLogin.php');
    include('connection.php');
    include('navBar.php');

    $c_id = $_GET['c_id'];
    $c_name = $_GET['name'];
    $status = $_GET['status'];
    $pass = $_GET['PASSWORD'];
    $c_contact = $_GET['contact'];
    $c_location = $_GET['address'];
?>

<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="./Css/CourierFormStyling.css" />

    <title>Upadte_courier</title>
</head>
<body>



<div class="container">
      <form method="post" class="item1">
        <h3 class="item1-1">Upadte Detail</h3>

        <label for="id">Courier id:</label>
        <input type="text" name="id" id="id" class="item1-2" value ="<?php echo $c_id; ?>"  readonly/>
        <label for="name">Courier Name:</label>
        <input type="text" name="name" id="name" class="item1-2" value ="<?php echo $c_name; ?>" readonly />
        <label for="phone">Contact no:</label>
        <input type="tel" name="ph" id="ph" class="item1-2"  value ="<?php echo $c_contact; ?>"/>
        <label for="location">Address:</label>
        <input type="text" name="location" id="" value ="<?php echo $c_location; ?>">
        <label for="password">password:</label>
        <input type="text" name="password" id="" value ="<?php echo $pass; ?>">

        <label for="">status:</label>
        <select name="status" id="status">
          <option value="active">active</option>
          <option value="inactive">inactive</option>
        </select>

        <br />
        <input type="submit" value="Submit" id="btn" name="enter" />
      </form>
    </div>

    <?php
       
    
        if (isset($_POST['enter'])) {
            $c_id = $_POST['id'];
            $c_name = $_POST['name'];
            $c_location = $_POST['location'];
            $c_contact = $_POST['ph'];
            $pass = $_POST['password'];
            $status = $_POST['status'];
            $sql ="UPDATE `courier` SET `status`='$status',`PASSWORD`='$pass',`address`='$c_location',`contact`='$c_contact' WHERE c_id = $c_id";
            $result =$connect->query($sql);
            if ($result) {
                echo "yes";
                echo "<script>location.href='Manage_Courier.php'</script>";
            } else {
                echo "no";
                echo "<script>location.href='Manage_Courier.php'</script>";
            }
        }


    ?>

    
</body>
</html>

<?php
    include('footer.php');
?>


