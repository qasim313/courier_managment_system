<?php
        
    if (isset($_POST['sh_weight']) && isset($_POST['category'])) {
      $sh_weight = $_POST['sh_weight'];
      $category = $_POST['category'];
      // Calculate tax and total based on sh_weight and category
      

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

      echo $totalAmount;
      
    }
  ?>