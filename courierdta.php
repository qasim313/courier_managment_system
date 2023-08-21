<?php

    include ('connection.php');


    $c_id = $_REQUEST['id'];
    $c_name = $_REQUEST['name'];
    $c_location = $_REQUEST['location'];
    $c_contact = $_REQUEST['ph'];
    $pass = $_REQUEST['password'];
    $status = $_REQUEST['status'];


    $sql = "select m_id from manager";
    $stmt = $connect->query($sql);

    $result = $stmt->FETCH_ASSOC();
    $m_id = $result['m_id'];

    $sql1 = "INSERT INTO `courier`(`name`, `status`, `PASSWORD`, `address`, `contact`, `m_id`) VALUES ('$c_name','$status','$pass','$c_location','$c_contact','$m_id')";

    $connect->query($sql1);

   


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