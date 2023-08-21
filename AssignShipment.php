<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    

    
    <style> 

    .box{
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      margin-bottom:50px;
      width:100%;

    }

    .box form {
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      width:50%;
      
      

    }

    .box form select {

      width:80%;
      height:50px;
      border : solid black 3px;
      border-radius:5px;
      font-size:200;
      font-weight:bold;
    }
    input {
      height:50px;
      width:20%;
      border :solid black 3px ;
      font-size:300;
      font-weight:bold;
      border-radius:10px;
      color:white;
      background:black;
    }
  
    </style>

    <title>Assign Shippment</title>
  </head>
  <body>
  <?php
    include ("navBar.php");
    include ("connection.php");
  ?>




  <div class="box">
      <h2>Select Area</h2>
      <form action="assign_deliveries.php" method="post">

      <select name="area" id="" value="Select Area">
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
      <br>
      <input type="submit" value="Enter" name="submit">

      </form>
  </div>


  

         

 
  </body>
</html>

<?php
  include('footer.php');
?>
