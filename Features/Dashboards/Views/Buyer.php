
 <?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Portal</title>
    <link rel="stylesheet" href="../Assets/BUyer.css">
 </head>
 <body>
     <div id="dashboardComponent">
         
        <div id="LeftBarDashBoard">
          <h2>AgriConnect</h2>
          <button id="dashboard">DashBoard</button>
          <br>
          <br>
          <button id="products">Products</button>
          <br>
          <br>
          <button id="orders">Orders</button>
          <br>
          <br>
          <button id="farmers">Farmers</button>
          <br>
          <br>
          <button id="setting">Settings</button>
          <br>
          <br>
          <button id="buyer"> Profile <br>Buyer
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

        <div id="middleDashBoard">

             <h1 id="welcomeText">Buyer DashBoard
              <h3>Welcome back  
              <?php 
               if(!isset($_SESSION['Fullname'])){
                  $_SESSION['Fullname']="";
               }
              echo" ",$_SESSION['Fullname']; 
              ?> 
             ! Here's What's Happening Today
              </h3>
    
             </h1>
             
    
              <div id="infoOverAll">
                  <p id="totalOrders">
                  Total Orders
                  <br>
                  200
                  </p>
      
                  <p id="PendingPayments">
                  Pending Payments
                  <br>
                  $1200
                  </p>
      
                  <p id="totalDeliveredOrders">
                  Total Delivered Orders
                  <br>
                  800
                  </p>

        </div>

        </div>

        <div id="rightDashBoard">
            <h1>Notifications</h1>
            <p>Your orders has been delivers</p>
            <p>Your  order is processing</p>
        </div>

     </div>
 </body>
 </html>