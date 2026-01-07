<?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");

  $requiredRole = 'shopowner';
  if(!isset($_SESSION['valid'])||$_SESSION['valid']!==true) {
      header("Location: ../../AuthenticationSystem/Views/Login.html");
      exit;
      }

   if(isset($requiredRole)){
      if(!isset($_SESSION['role'])||$_SESSION['role']!=$requiredRole) {
          echo "Invalid URL";
          exit;
      }
      }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopOwner Dashboard</title>
    <link rel="stylesheet" href="../Assets/ShopOwner.css">
    <link rel="stylesheet" href="../../User_Profile_Management/Assets/ShopOwnerProfile.css">
</head>
<body>
    <div id="dashboardComponent">

        <div id="LeftBarDashBoard">
            <h2>AgriConnect</h2>
            <button id="dashboard">DashBoard</button>
            <br><br>
            <button id="products">Products</button>
            <br><br>
            <button id="ShopPartner">Profile <br>ShopOwner <br> Agriconnect</button>
            <br><br>
            <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

        <div id="middleDashBoard">

          <?php include_once("../../User_Profile_Management/Views/ShopOwnerProfile.php");?>
          <?php include("ShopOwnerOrders.php");?>
          <?php include("ShopOwnerSettings.php");?>
          <?php include_once("ShopOwnerProducts.php");?>
            
           <div id="dashboardView">
              <h1 id="welcomeText">ShopOwner DashBoard
                <h3>Welcome back  
                <?php echo$_SESSION['FullnameShopOwner']; ?> ! 
                </h3>
              </h1>
              <img src="../Assets/ShopOwner.png" width="700px" height="400px" alt="ShopOwner Picture">
           
           </div>
        </div>

            <div id="ordersView" style="display:none;">
                <?php include_once("../../CartAndCheckout/Views/ShopOwnerCartView.php"); ?>
            </div>
        </div>

    </div>

    <script src="../Assets/ShopOwner.js"></script>
</body>
</html>
