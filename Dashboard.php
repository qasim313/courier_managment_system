<html>
<head>
    <title>Dashboard</title>
</head>
<link rel="stylesheet" href="./css/NavStyle.css" />
<link rel="stylesheet" href="./css/footer.css" />
<style>
  body{
    padding: 0px;
    margin: 0px;
  /* background-image: url("pic/backmap2.jpg"); */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    font-family: sans-serif !important;
  }



    .dashboard_table{
      
        padding: 20px;
        margin: 20px;
        background-color: #fff;
        border-radius: 15px;
    }

    table {
  border-collapse: collapse;
  width: 100%;
}
th {
  background-color: #04AA6D;
  color: white;
}
th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
    .header{
       
        color: black;
        padding: 15px;

    }
    .container{
      background: rgba(255, 255, 255, 0.33);
  /* box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 30px; */
  backdrop-filter: blur(5.1px);
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        border-radius: 10px;
        padding: 120px 0px ;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
      border-radius: 5px;
        margin: 10px;
        font-size: large;
        font-weight: 600;
        height: 100%;
    }
    
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    img {
      border-radius: 5px 5px 0 0;
    }
    
    .container {
      padding: 2px 16px;
    }
     
    </style>
<body >

 <?php
  include ("navBar.php");
?> 

  <div class="header" style="padding-top: 70px;">
    <!-- <h1 style="color: rgb(10, 9, 9);">Manager's Dashboard</h1> -->
</div>
    
<div class="container">

<div class="card">
  <div class="container">
    <h2><b>Total shippments</b></h2> 
    <h4>25</h4> 
  </div>
</div>

<div class="card">
    <div class="container">
      <h2><b>Assigned shippments</b></h2> 
      <h4>25</h4> 
    </div>
  </div>

  <div class="card">
    <div class="container">
      <h2><b>Delivered</b></h2> 
      <h4>25</h4> 
    </div>
  </div>
</div>

<div class="dashboard_table">
    <h1>Recent Dileveries</h1>
    <table>
        <tr>
            <th>Shippment ID</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>
            <th>Shippment Status</th>
            <th>Shippment Date</th>
            <th>Delivery Date</th>
            <th>Delivery Status</th>
            
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>1234567890</td>
            <td>123, abc street, xyz city</td>
            <td>Assigned</td>
            <td>12/12/2020</td>
            <td>12/12/2020</td>
            <td>Delivered</td>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>1234567890</td>
            <td>123, abc street, xyz city</td>
            <td>Assigned</td>
            <td>12/12/2020</td>
            <td>12/12/2020</td>
            <td>Delivered</td>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>1234567890</td>
            <td>123, abc street, xyz city</td>
            <td>Assigned</td>
            <td>12/12/2020</td>
            <td>12/12/2020</td>
            <td>Delivered</td>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>1234567890</td>
            <td>123, abc street, xyz city</td>
            <td>Assigned</td>
            <td>12/12/2020</td>
            <td>12/12/2020</td>
            <td>Delivered</td>
        </tr>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>1234567890</td>
            <td>123 abc street, xyz city</td>
            <td>Assigned</td>
            <td>12/12/2020</td>
            <td>12/12/2020</td>
            <td>Delivered</td>
            
        </tr>
    </table>


</div>

</body>
</html>