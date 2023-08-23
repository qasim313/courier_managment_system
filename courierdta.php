<?php
 include 'CheckifLogin.php';
include ('connection.php');


    

   


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
            $connect->close();




?>