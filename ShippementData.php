<?php
    include 'CheckifLogin.php';
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
    $status = $_REQUEST['status'];

    $sql = "select m_id from manager";
    $stmt = $connect->query($sql);

    $result = $stmt->FETCH_ASSOC();
    $m_id = $result['m_id'];

    $sql1 = "insert into shipper(name,address,contact,m_id)
            values('$s_name','$s_address','$s_phone','$m_id')";

    $flag1 = $connect->query($sql1);


    $sql6 = "select s_id from shipper order by s_id desc";
    $result1 = $connect->query($sql6);

    $row1= $result1->fetch_assoc();

    $s_id = $row1['s_id'];

    echo $s_id;


    
    $sql2 = "insert into shipment(weight,category,issue_date,delievery_date,m_id,s_id , status)
            values('$sh_weight','$category','$p_date','$d_date','$m_id','$s_id' , '$status')";

    $flag2 =$connect->query($sql2);

    $sql3 = "insert into customer(name,phone,address ,s_id )
            values('$r_name','$r_contact','$r_address' , '$s_id')";
   
    $flag3 =$connect->query($sql3);
    

    $amount = 200;
    //this will be the standard price for all deliveries less than or equal to 5kg(weight)

    if($sh_weight > 5){
        $amount = $amount + ($sh_weight - 5)*50;
    }//add 50RS per kg for weights more than 100

    //we will add tax on the basis of shippemnt category

    $tax = 0.0;
    if($category == "Document shipments"){
        $tax = 0.13;
    }
    else if($category == "Package shipments"){
        $tax = 0.18;
    }
    else if($category == "Fragile shipments"){
        $tax = 0.23;
    }else if($category == "Express shipments"){
        $tax = 0.28;
    }else if ($category == "High Value shipments") {
        $tax = 0.33;
    }


    $taxAmount = $amount*$tax;
    $totalAmount = $amount + $taxAmount;


    $sql4 = "insert into payment(amount,tax,total,m_id)
            values('$amount','$taxAmount','$totalAmount','$m_id')";

    $flag4 =$connect->query($sql4);

    $sql5 = "select p_id from payment order by issue_date desc";



    $result2 = $connect->query($sql5);

    $row2= $result2->fetch_assoc();

    $p_id = $row2['p_id'];


    

    $sql6  = "select sh_id from shipment where $s_id=s_id";
    $result3 = $connect->query($sql6);
    $row3= $result3->fetch_assoc();
    $sh_id=$row3["sh_id"];

    $sql7 = "insert into pay(s_id,sh_id,p_id) values('$s_id','$sh_id','$p_id')";

    $result3 = $connect->query($sql7);
    // echo "
    //         <center>
    //         <h2> Shipper Detail </h2>
    //             <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
    //                 <tr style='border: 5px solid black; background-color: goldenrod;'>
    //                     <th>Shipper Name</th>
    //                     <th>Shipper Number</th>
    //                     <th>Shipper Address</th>
                        
    //                 </tr>
    //                 <tr>
    //                     <td>$s_name</td>
    //                     <td>$s_phone</td>
    //                     <td>$s_address</td>
                        
    //                 </tr>
    //             </table>
    //         </center>
    //         <br>
    //         <br>
    //         ";


    //         echo "
    //         <center>

    //             <h2> Shippment Detail </h2>
    //             <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
    //                 <tr style='border: 5px solid black; background-color: goldenrod;'>
    //                     <th>Shippment Weight</th>
    //                     <th>issue date</th>
    //                     <th>delivery date</th>
    //                 </tr>
    //                 <tr>
    //                     <td>$sh_weight</td> 
    //                     <td>$p_date</td>
    //                     <td>$d_date</td>
    //                 </tr>
    //             </table>
    //         </center>
    //         <br>
    //         <br>
    //         ";


    //         echo "
    //         <center>
    //         <h2> Receiver Detail</h2>
    //             <table border='1' height='100px' width='50%' style=' border-spacing: 0 ; text-align: center; '  >
    //                 <tr style='border: 5px solid black; background-color: goldenrod;'>
    //                     <th>Receiver Name</th>
    //                     <th>Receiver id</th>
    //                     <th>Receiver Location</th>
    //                     <th>Payment Status</th>
                        
    //                 </tr>
    //                 <tr>
    //                     <td>$r_name</td>
    //                     <td>$r_contact</td>
    //                     <td>$r_address</td>
    //                     <td>$payment</td>
                        
    //                 </tr>
    //             </table>
    //         </center>
    //         ";


    //         insertData();
            $connect->close();
            if($flag1 && $flag1 && $flag2 && $flag3 && $flag4 && $result1 && $result2 && $result3 ){
                echo"alert('Shipment Added Successfully!)";
            }else{
                echo"alert('Failed to Add Shipment!)";
            }
            
            header("Location: ShipmentDetail.php");
            exit();


?>


