<?php
  require("../../AuthenticationSystem/Controllers/authCheck.php");

  
  
  require_once("../Models/RequstModels.php");
  require_once("../Models/FarmerModels.php");
  require_once("../Models/ShopOwnerModels.php");

   $requiredRole = 'employee';
   if(!isset($_SESSION['valid'])||$_SESSION['valid']!==true) {
      header("Location: ../../AuthenticationSystem/Views/Login.html");
      exit;
      }

   if (isset($requiredRole)){
      if (!isset($_SESSION['role'])||$_SESSION['role']!=$requiredRole) {
          echo "Invalid URL";
          exit;
      }
      }


    
  

  [$requests, $reqCount]=getAllRequests();
  [$farmers, $farmerCount]=getAllFarmers();
  [$owners, $ownerCount]=getAllShopOwners();

  $_SESSION['CountOfRequest']= $reqCount;
  $_SESSION['countOfFarmer']= $farmerCount;
  $_SESSION['countOfShopOwner']= $ownerCount;
   
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/Employee.css">
    <link rel="stylesheet" href="../../User_Profile_Management/Assets/EmployeeProfile.css">
 </head>
 <body>
     <div id="dashboardComponent">
         
        <div id="LeftBarDashBoard">
          <h2>AgriConnect</h2>
          <button id="dashboard">DashBoard</button>
          <br>
          <br>
          <button id="farmers">Farmers</button>
          <br>
          <br>
          <button id="shopOwener">Shop OWner</button>
          <br>
          <br>
          <button id="products">Products</button>
          <br>
          <br>
          <button id="reports">Requests (
            <?php echo$_SESSION['CountOfRequest']?>)
           </button>
          <br>
          <br>
          <button id="setting">Settings</button>
          <br>
          <br>
          <button id="employee"> Profile <br>Employee
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

        <div id="middleDashBoard">
           <?php include_once("../../User_Profile_Management/Views/EmployeeProfile.php");?>
           <?php include_once("EmoloyeeFarmer.php");?>
           <?php include_once("EmployeeProduct.php");?>
           <?php include_once("EmoloyeeshooOwner.php");?>
           <?php include_once("EmployeeRequest.php");?>
           <?php include_once("EmployeeSetting.php");?>
           <div id="dashboardView">
         <h1 id="welcomeText">Employee DashBoard
          <h3>Welcome back  <?php echo$_SESSION['FullnameEmployy']?> 
          </h3>

         </h1>
         

          <div id="infoOverAll">
            <p id="totalfarmers">
            Total Farmers
            <br>
          <?php   echo$_SESSION['countOfFarmer']?>
            </p>

            <p id="totalBuyer">
            Total Shops
            <br>
            
            <?php echo$_SESSION['countOfShopOwner']?>
            </p>
          </div>
          </div>
        </div>

     </div>
      <script src="../Assets/Employee.js"></script>

      <?php if(isset($_GET['page']) && $_GET['page'] === 'products'){?>
      <script>
        document.getElementById('products').click();
      </script>

      <?php
    } 
    ?>
 </body>
 </html>