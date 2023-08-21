<link rel="stylesheet" href="./Css/NavStyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">



<nav>
    <ul>
          <li><a href="Dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i>DashBoard</a></li>
          <li><a href="AssignShipment.php"><i class="fa fa-truck" aria-hidden="true"></i>Assign</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i></i>Add</a>
            <ul>
              <li><a href="ShipmentDetail.php">Shippment</a></li>
              <li><a href="Add_Courier.php">Courier</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i></i>Manage</a>
              <ul>
                  <li><a href="Manage_Shipment.php">Shippment</a></li>
                  <li><a href="Manage_Courier.php">Courier</a></li>
              </ul>
          </li>
        </ul>
        <button><a href="CheckifLogin.php?value=true">Logout</a></button>
      </nav>
