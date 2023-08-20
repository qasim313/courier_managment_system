<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Css/CourierFormStyling.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/NavStyle.css" />

    
    <title>Contact</title>
  </head>
  <body>
  <?php
    include ("navBar.php");
  ?>

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
        <input type="password" name="password" id="">

        <label for="">status:</label>
        <select name="status" id="status">
          <option value="active">active</option>
          <option value="inactive">inactive</option>
        </select>


                


        <br />
        <input type="submit" value="Submit" id="btn" />
      </form>
    </div>

<?php
  include ("footer.php");
?>
  </body>
</html>
