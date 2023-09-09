<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipments of Courier</title>
    <link rel="stylesheet" href="./Css/NavStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./css/TableStyle.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
  body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
    }

    @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    }

    .modal-header {
    padding: 2px 16px;
    background-color: black;
    color: white;
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
        display:flex;
        align_items:right;
        justify-content:right;
    padding: 2px 16px;
    color: white;
    }
    .txt{
        width:70%;
        font-size:16px;
        padding:10px;
    }
    #update_btn{
        background-color:black;
        color:white;
        font-size:13px;
        padding: 5px 15px 5px 15px;
        margin-bottom:10px;
        
    }
</style>
</head>
<body>
    <?php   
        include 'CheckifLogin.php';
        include ("connection.php");
        if (isset($_GET['value'])) {
            $receivedValue = $_GET['value'];
        } else {
            header("Location: login.html");
            exit();
        }
    ?>

    <nav>
        <ul>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>
             <?php 
                $sql = "SELECT CONCAT(UPPER(SUBSTR(name, 1, 1)), LOWER(SUBSTR(name, 2, LENGTH(name)))) AS name FROM courier WHERE c_id='$receivedValue'";
                $stmt = $connect->query($sql);
                $result = $stmt->FETCH_ASSOC();
                echo $result['name'];
             ?></a></li>
            <button><a href="logout.php">Logout</a></button>
        </ul>
    </nav>

    <div class="dashboard_table">
        <h1 style="color:black " style="overflow-x:auto">Shipments</h1>
        <table>
            <tr>
                <th>Shipment Id</th>
                <th>Issue Date</th>
                <th>Delivery Date</th>
                <th>Receiver's Contact</th>
                <th>Delivery Status</th>
                <th>Delivery Location</th> 
                <th>Update Status</th> 
            </tr>
            <?php
            $sql = "select shipment.* , customer.address , customer.phone from shipment join shipper
             using(s_id) join customer using(s_id)  WHERE shipment.c_id = $receivedValue  order by status desc";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>$row[sh_id]</td>
                        <td>$row[issue_date]</td>
                        <td>$row[delivery_date]</td>
                        <td>$row[phone]</td>
                        <td>$row[status]</td>
                        <td>$row[address]</td>
                        <td>
                            <a class='update-link' href='#' data-shipment-id='$row[sh_id]'>update</a>
                        </td>
                    </tr>
                ";
            }
            ?>
        </table>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Update Status</h2>
            </div>
            <br>
            <div class="modal-body">
                <label for="sh_id">Shipment Id: </label><br>
                <input class="txt" id="sh_id_in_pop" value="" readonly /><br><br>
                <label for="payMethod">Status: </label><br>
                <select class="txt" id="payMethod">
                    <option value="delivered">delivered</option>
                </select>
            </div>
            <div class="modal-footer">
                <button id="update_btn"> Update </button>
                <br>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var modal = document.getElementById("myModal");
        var shIdInput = document.getElementById("sh_id_in_pop");
        var updateLinks = document.querySelectorAll(".update-link");
        var span = document.getElementsByClassName("close")[0];

        updateLinks.forEach(function(link) {
            link.addEventListener("click", function() {
                var shipmentId = link.getAttribute("data-shipment-id");
                shIdInput.value = shipmentId;
                modal.style.display = "block";
            });
        });

        span.onclick = function() {
            modal.style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
        $("#update_btn").click(function() {
        var shId = $("#sh_id_in_pop").val();
        var newStatus = $("#payMethod").val();
        // alert(shId);
        $.ajax({
            type: "POST",
            url: "updateShipmentStatus.php", // Replace with the PHP script to handle the update
            data: {
                sh_id: shId,
                new_status: newStatus
            },
            success: function(response) {
                var values = response;
                alert(values);
                // Refresh the page after successful update
                location.reload();
            }
        });
    });
    </script>
</body>
</html>

<?php
  include ("footer.php");
?>