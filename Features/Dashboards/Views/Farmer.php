
 <?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/Farmer.css">

 </head>
 <body>
     <div id="dashboardComponent">
         
        <div id="LeftBarDashBoard">
          <h2>AgriConnect</h2>
          <button id="dashboard">DashBoard</button>
          <br>
          <br>
          <button id="myOrders">My Orders</button>
          <br>
          <br>
          <button id="products">Products</button>
          <br>
          
          <br>
          <button id="setting">Settings</button>
          <br>
          <br>
          <button id="farmer"> Profile <br>Farmer
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

        <div id="middleDashBoard">

         <h1 id="welcomeText">Farmer DashBoard
          <h3>Welcome back  
          <?php 
           if(!isset($_SESSION['Fullname'])){
              $_SESSION['Fullname']="";
           }
          echo" ",$_SESSION['Fullname']; 
          ?> 
          </h3>

         </h1>
         

          <div id="infoOverAll">
            <p id="totalfarmers">
            Total Farmers
            <br>
            1200
            </p>

            <p id="totalBuyer">
            Total Buyer
            <br>
            120
            </p>

            <p id="totalEmployee">
            Total Employee
            <br>
            80
            </p>

          </div>

        </div>

        <div id="rightDashBoard">
            <h1>Notifications</h1>
            <p>Farmer Request For Payment</p>
            <p>Order Placed From Farmer</p>
        </div>

     </div>
 </body>
 </html>