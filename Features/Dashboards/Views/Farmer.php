
 <?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");
  
   $requiredRole = 'farmer';  
   if(!isset($_SESSION['valid'])||$_SESSION['valid']!==true) {
      header("Location: ../../AuthenticationSystem/Views/Login.html");
      exit;
      }

   if(isset($requiredRole)){
      if (!isset($_SESSION['role'])||$_SESSION['role'] !=$requiredRole) {
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
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/Farmer.css">
    <link rel="stylesheet" href="../../User_Profile_Management/Assets/FarmerProfile.css">
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
          <button id="farmer"> Profile <br>Farmer
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>
        <div id="middleDashBoard">
           <?php include_once("../../User_Profile_Management/Views/FarmerProfile.php");?>
            <?php include("FarmerOrders.php");?>
            <?php include("FarmerProducts.php");?>
            <?php include("FarmerSetting.php");?>
        <div id="dashboardView">
         <h1 id="welcomeText">Farmer DashBoard
          <h3>Welcome back  
          <?php 
          echo" ",$_SESSION['FullnameFarmer']; 
          ?> 
            </h3>
          <br>
          <br>
          <img src="https://img.freepik.com/premium-photo/happy-asian-man-farmer-with-smiling-face-hand-holding-smart-phone-standing-rice-farm-cash-subsidy-concept_55716-3407.jpg" alt="farmer Image" style="height: 400px;width:1013px">
        

         </h1>
         
         </div>
         

        </div>

       <!-- <div id="rightDashBoard">
            <h1>Notifications</h1>
            <p>Farmer Request For Payment</p>
            <p>Order Placed From Farmer</p>
        </div>
-->

     </div>
     <script src="../Assets/Farmer.js"></script>
     <?php if(isset($_GET['page']) && $_GET['page'] === 'products'){
      ?>
      <script>
        document.getElementById('products').click();
      </script>

      <?php
    } 
    ?>
 </body>
 </html>