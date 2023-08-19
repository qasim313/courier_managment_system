<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="footer.css" /> -->
  <link rel="stylesheet" href="./css/NavStyle.css" />
  <style>

            table {
                border: solid black 5px;
                border-radius: 10px;
                background-color: #ffffff72;
                box-shadow: black 2px 2px 2px;
                /* align-self: center; */
                width: 100%;


            }
            #head_1 {
                border: solid black 5px;
                /* background-color: blue; */
            }
            div {
                display: flex;
                flex-direction: column;
                /* /* justify-content: center; */
                justify-items: center; 
                /* width: 70%; */
                width: 100%;
                padding : 120px 0px ;
            }
            body {
                margin: 0px;
                padding: 0px;
                /* background-color: rgba(165, 42, 42, 0.692); */
                /* color: white; */
                font-size: large;
                background-image: url(two.jpg);
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment :fixed;

            }
            td {
                text-align: center;
            }
            tr {
                height: 100px;
            }
            h3 {
                text-align: center;
            }

        </style>
  <title>Manage Courier</title>
</head>
<body>


  




    <?php
      include ('connection.php');

      $sql = "select * from courier";


      $result = $connect->query($sql);


      ?>



      <div>

            <h3>Manage_courier</h3>

            <table>


                <tr id="head_1">

                    <th>id</th>
                    <th>name</th>
                    <th>Status</th>
                    <th>password</th>
                    <th>Contact</th>
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