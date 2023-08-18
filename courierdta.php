<?php

    include ('connection.php');


    $c_id = $_REQUEST['id'];
    $c_name = $_REQUEST['name'];
    $c_location = $_REQUEST['location'];
    $c_contact = $_REQUEST['ph'];
    $pass = $_REQUEST['password'];
    $status = $_REQUEST['status'];


    $sql = "INSERT INTO `courier`(c_id ,  `name`, `status`, `PASSWORD`, `address`, `contact`) VALUES ('$c_id' , '$c_name' , '$status' , '$pass' , '$c_location', '$c_contact' )";

    $connect->query($sql);

   


    echo "
            <center>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Name</th>
                        <th>Id</th>
                        <th>Location</th>
                        <th>Contect</th>
                    </tr>
                    <tr>
                        <td>$c_name</td>
                        <td>$c_id</td>
                        <td>$c_location</td>
                        <td>$c_contact</td>
                    </tr>
                </table>
            </center>
            ";




?>