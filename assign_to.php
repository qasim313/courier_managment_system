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

  $sql= "select * from courier";
    $result = mysqli_query($connect,$sql);
    if($result->num_rows > 0){
    //c_id	c_name	c_phone	c_address	c_email	c_password	c_status
        echo '
        <div class="dashboard_table">
        <div class="table-content">
        <h3>Manage Courier</h3>
        <table>
        <tr>
        <th>Courier ID</th>
        <th>Courier Name</th>
        <th>Status</th>
        <th>Password</th>
        <th>address</th>
        <th>Phone</th>
        <th>manager</th>
        <th>Assign</th>
        </tr> ';
        
// c_id
// name
// status
// PASSWORD
// address
// contact
// m_id

        while($row = $result->fetch_assoc()){
            echo '  
            <tr>
            <td>'.$row["c_id"].'</td>
            <td>'.$row["name"].'</td>
            <td>'.$row["status"].'</td>
            <td>'.$row["PASSWORD"].'</td>
            <td>'.$row["address"].'</td>
            <td>'.$row["contact"].'</td>
            <td>'.$row["m_id"].'</td>
            <td><a href="courier_assigned.php?c_id='.$row["c_id"].'&sh_id='.$_GET['sh_id'].'.&m_id='.$row['m_id'].'">Assign</a></td>
            </tr>';
        }
        echo '
        </table>
        </div>
        </div>
        ';

    }
    else{
        echo "No Record Found";
    }
  ?>