<?php

    
$connect = mysqli_connect ("localhost", "root" , "" , "courior_managment_system");
    $s_name = $_REQUEST['s-name'];
    $s_address = $_REQUEST['s-address'];
    $s_phone = $_REQUEST['s-ph'];
    $sh_id = $_REQUEST['sh-id'];
    $sh_weight = $_REQUEST['sh-weight'];
    $sh_description = $_REQUEST['sh-des'];

    $r_name = $_REQUEST['r-name'];
    $r_id = $_REQUEST['r-id'];
    $r_location = $_REQUEST['r-location'];
    $payment = $_REQUEST['payMethod'];
   

    echo "
            <center>
            <h2> Shipper Deatil </h2>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Shipper Name</th>
                        <th>Shipper Number</th>
                        <th>Shipper Address</th>
                        
                    </tr>
                    <tr>
                        <td>$s_name</td>
                        <td>$s_phone</td>
                        <td>$s_address</td>
                        
                    </tr>
                </table>
            </center>
            <br>
            <br>
            ";


            echo "
            <center>

                <h2> Shippment Deatil </h2>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Shippment id</th>
                        <th>Shippment Weight</th>
                        <th>Shippment Description</th>
                        
                    </tr>
                    <tr>
                        <td>$sh_id</td>
                        <td>$sh_weight</td>
                        <td>$sh_description</td>
                        
                    </tr>
                </table>
            </center>
            <br>
            <br>
            ";


            echo "
            <center>
            <h2> Receiver Deatil </h2>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Receiver Name</th>
                        <th>Receiver id</th>
                        <th>Receiver Location</th>
                        <th>Payment Status</th>
                        
                    </tr>
                    <tr>
                        <td>$r_name</td>
                        <td>$r_id</td>
                        <td>$r_location</td>
                        <td>$payment</td>
                        
                    </tr>
                </table>
            </center>
            ";




?>