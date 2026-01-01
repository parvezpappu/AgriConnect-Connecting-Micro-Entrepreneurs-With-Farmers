
 <?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Portal</title>
    <link rel="stylesheet" href="../Assets/ShopOwner.css">
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
          <button id="setting">Settings</button>
          <br>
          <br>
          <button id="ShopPartner"> Profile <br>Buyer
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

        <div id="middleDashBoard">
         <?php include("ShopOwnerProducts.php");?>
          <?php include("ShopOwnerOrders.php");?>
          <?php include("ShopOwnerSettings.php");?>
             <div id="dashboardView">
             <h1 id="welcomeText">ShopOwner DashBoard
              <h3>Welcome back  
              <?php 
              
              echo" ", $_SESSION['FullnameShopOwner']; 
              ?> 
             ! Here's What's Happening Today
              </h3>
    
             </h1>
           

        </div>
            </div>

        <div id="rightDashBoard">
            <h1>Notifications</h1>
            <p>Your orders has been delivers</p>
            <p>Your  order is processing</p>
        </div>

     </div>
     <script src="../Assets/ShopOwner.js"></script>
 </body>
 </html>