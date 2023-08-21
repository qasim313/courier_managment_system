<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/FormStyling.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/NavStyle.css" />
  <style> 
    .table-content {
    padding: 20px;
        margin: 20px;
        background-color: #fff;
        border-radius: 15px;
  }
  table {
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: #04AA6D;
  color: white;
}
th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>


    <title>Area</title>
  </head>
  <body>
  <?php
  include ("navBar.php");
  include ("connection.php");

  $sql= "select * from shipment";
  $result = mysqli_query($connect,$sql);
  if($result->num_rows > 0){
 //sh_id	weight	category	issue_date	delievery_date	m_id	s_id	c_id
    echo '
    <div class="dashboard_table">
    <div class="table-content">
    <h3>Manage Shipment</h3>
    <table>
    <tr>
        <th>Shipment ID</th>
        <th>Weight</th>
        <th>Category</th>
        <th>Issue Date</th>
        <th>Delievery Date</th>
        <th>Manager ID</th>
        <th>Supplier ID</th>
        <th>Customer ID</th>
        <th>Assign To</th>
    </tr>';

    while($row=mysqli_fetch_assoc($result)){
      $sh_id=$row['sh_id'];
      $weight=$row['weight'];
      $category=$row['category'];
      $issue_date=$row['issue_date'];
      $delievery_date=$row['delievery_date'];
      $m_id=$row['m_id'];
      $s_id=$row['s_id'];
      $c_id=$row['c_id'];

      echo '  
        <tr>
            <td>'.$sh_id.'</td>
            <td>'.$weight.'</td>
            <td>'.$category.'</td>
            <td>'.$issue_date.'</td>
            <td>'.$delievery_date.'</td>
            <td>'.$m_id.'</td>
            <td>'.$s_id.'</td>
            <td>'.$c_id.'</td>
            <td><a href="assign_to.php?sh_id=$row[sh_id]" style="width: 100%; border: 2px solid black; border-radius: 10px; padding: 2px; background: black; color: white; cursor: pointer;">Assign To</a></td>
        </tr>';
    }
      
          echo "</table>";
  }
  else{
    echo "0 result";
  }


?>


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
