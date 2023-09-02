<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/CourierFormStyling.css" />
    
    <title>Contact</title>
  </head>
  <body>
  <?php
    include('connection.php');
    include 'CheckifLogin.php';

    include ("navBar.php");
  ?>

    <div class="container">
      <form method="post" class="item1">
        <h3 class="item1-1">Courier Detail</h3>

        <label for="id">Courier id:</label>
        <input type="text" value="auto-generated" readonly="read" name="id" id="id"  class="item1-2" required/>
        <label for="name">Courier Name:</label>
        <input type="text" name="name" id="name" class="item1-2" required />
        <label for="phone">Contact no:</label>
        <input type="tel" name="ph" id="ph" class="item1-2" required/>
        <label for="location">Address:</label>
        <input type="text" name="location" id=""required/>
        <label for="password">password:</label>
        <input type="password" name="password" id=""required  placeholder="atleast 5 words"/>

        <label for="">status:</label>
        <select name="status" id="status" >
          <option value="active">active</option>
          <option value="inactive">inactive</option>
        </select>


                


        <br />
        <input type="submit" value="Submit" id="btn" name="sub" />
      </form>
    </div>

    <?php


    if ( isset($_POST['sub'])){
          $c_id = $_POST['id'];
          $c_name = $_POST['name'];
          $c_location = $_POST['location'];
          $c_contact = $_POST['ph'];
          $pass = $_POST['password'];
          $status = $_POST['status'];

          //php form validation
          if (empty($c_name) || empty($c_location) || empty($c_contact) || empty($pass) || empty($status)){
            echo"<script> alert('Please fill all the fields'); </script>";
            exit();
          }
          if (strlen($c_contact) != 11) {
            echo"<script> alert('Contact number should be of 11 digits'); </script>";
            exit();
          }
          if (strlen($pass) < 5) {
            echo"<script> alert('Password should be of atleast 5 characters'); </script>";
            exit();
          }

          $sql = "select m_id from manager";
          $stmt = $connect->query($sql);

          $result = $stmt->FETCH_ASSOC();
          $m_id = $result['m_id'];

          $sql1 = "INSERT INTO `courier`(`name`, `status`, `PASSWORD`, `address`, `contact`, `m_id`) 
          VALUES ('$c_name','$status','$pass','$c_location','$c_contact','$m_id')";

          $connect->query($sql1);
          echo"<script> alert('Courier added successfully'); </script>";
    }
    ?>

<?php
  include ("footer.php");
?>
  </body>
</html>
