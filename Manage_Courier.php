<!DOCTYPE html>
<html>
<head>           
    <title>Manage Courier</title>
    <link rel="stylesheet" href="./css/TableStyle.css" />
    <style> 
        

    </style>
</head>
<body>

    <?php
        include 'CheckifLogin.php';
        include('connection.php');
        include('navBar.php');

        $sql = "select * from courier";


        $result = $connect->query($sql);


      ?>



            <div class="dashboard_table">
              <h1 style="color:black">Courier Detail</h1>
              <table>
                  <tr>
                      <th >Id</th>
                      <th >name</th>
                      <th >status</th>
                      <th >Password</th>
                      <th >contact</th>
                      <th>Address</th> 
                      <th>Deletion</th>
                      <th>Updation</th>
                  </tr>

 

                <?php
                
                    while ($row = $result->fetch_assoc()) {
                        # code...

                        echo "


                        <tr> 
                            <td>$row[c_id]</td>
                            <td>$row[name]</td>
                            <td>$row[status]</td>
                            <td>$row[PASSWORD]</td>
                            <td>$row[contact]</td>
                            <td>$row[address]</td>

                            <td>
                                <a href='delete_courier.php?c_id=$row[c_id]'>Delete</a>
                            </td>
                            <td>
                                <a href='update_courier.php?c_id=$row[c_id]&name=$row[name]&status=$row[status]&PASSWORD=$row[PASSWORD]&contact=$row[contact]&address='>update<a>
                            </td>
                        </tr>
                        
                        ";

                        
                    }
                ?>


            </table>
        </div>


        <?php
             $connect->close(); 
        ?>
    
</body>
</html>

<?php
    include('footer.php');
?>