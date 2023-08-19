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
            values('$s_name','$s_address','$s_phone')";
   
    $connect->query($sql1);

    $sql2 = "insert into customer(name,phone,address)
            values('$r_name','$r_contact','$r_address')";
   
    $connect->query($sql2);

    $amount = 200;
    //this will be the standard price for all deliveries less than or equal to 5kg(weight)

    if($sh_weight > 5){
        $amount = $amount + ($sh_weight - 5)*50;
    }//add 50RS per kg for weights more than 100

    //we will add tax on the basis of location

    $tax = 0.0;
    if($category == "Document shipments"){
        $tax = 0.13;
    }
    else if($category === "Package shipments"){
        $tax = 0.18;
    }
    else if($category == "Fragile shipments"){
        $tax = 0.23;
    }else if($category == "Express shipments"){
        $tax = 0.28;
    }elseif ($category == "High Value shipments") {
        $tax = 0.33;
    }


    $taxAmount = $amount*$tax;
    $totalAmount = $amount + $taxAmount;


    $sql3 = "insert into payment(amount,tax,total)
            values('$amount','$taxAmount','$totalAmount')";

    $connect->query($sql3);


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