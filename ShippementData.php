<?php


    
    include ('connection.php');

    $sh_weight = $_REQUEST['sh-weight'];
    $category = $_REQUEST['type'];
    $p_date = $_REQUEST['p-date'];
    $d_date = $_REQUEST['d-date'];

    $s_name = $_REQUEST['s-name'];
    $s_address = $_REQUEST['s-address'];
    $s_phone = $_REQUEST['s-ph'];

    $r_name = $_REQUEST['r-name'];
    $r_contact = $_REQUEST['r-contact'];
    $r_address = $_REQUEST['r-address'];
    $payment = $_REQUEST['payMethod'];

    $sql = "insert into shipment(weight,category,issue_date,delievery_date)
            values('$sh_weight','$category','$p_date','$d_date')";
   
    $connect->query($sql);

    $sql1 = "insert into shipper(name,address,contact)
            values('$s_name','$s_address','$s_ph')";
   
    $connect->query($sql1);

    $sql2 = "insert into customer(name,phone,address)
            values('$r_name','$r_contact','$r_address')";
   
    $connect->query($sql2);

    echo "
            <center>
            <h2> Shipper Detail </h2>
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

                <h2> Shippment Detail </h2>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Shippment Weight</th>
                        <th>issue date</th>
                        <th>delivery date</th>
                    </tr>
                    <tr>
                        <td>$sh_weight</td> 
                        <td>$p_date</td>
                        <td>$d_date</td>
                    </tr>
                </table>
            </center>
            <br>
            <br>
            ";


            echo "
            <center>
            <h2> Receiver Detail</h2>
                <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
                    <tr style='border: 5px solid black; background-color: goldenrod;'>
                        <th>Receiver Name</th>
                        <th>Receiver id</th>
                        <th>Receiver Location</th>
                        <th>Payment Status</th>
                        
                    </tr>
                    <tr>
                        <td>$r_name</td>
                        <td>$r_contact</td>
                        <td>$r_address</td>
                        <td>$payment</td>
                        
                    </tr>
                </table>
            </center>
            ";


            $connect->close();

?>