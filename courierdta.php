<?php

$connect = mysqli_connect ("localhost", "root" , "" , "courior_managment_system");


    $c_id = $_REQUEST['id'];
    $c_name = $_REQUEST['name'];
    $c_location = $_REQUEST['location'];
    $c_contect = $_REQUEST['ph'];


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
                        <td>$c_contect</td>
                    </tr>
                </table>
            </center>
            ";

?>