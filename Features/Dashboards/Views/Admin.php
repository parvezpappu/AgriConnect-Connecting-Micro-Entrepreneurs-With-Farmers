  <?php
  require("../../AuthenticationSystem/Controllers/authCheck.php");

  require_once("../Models/RequstModels.php");
  require_once("../Models/FarmerModels.php");
  require_once("../Models/ShopOwnerModels.php");
  require_once("../../ProductManagement/Models/productModel.php");

  [$requests, $reqCount]=getAllRequests();
  [$farmers, $farmerCount]=getAllFarmers();
  [$owners, $ownerCount]=getAllShopOwners();
  $requiredRole = 'admin';


  

  $_SESSION['CountOfRequest']= $reqCount;
  $_SESSION['countOfFarmer']= $farmerCount;
  $_SESSION['countOfShopOwner']= $ownerCount;

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

  if(isset($_POST['action'])){
    $productID= $_POST['productID'];
    
    if($_POST['action']=='delete'){
    deleteProduct($productID);
    header("location: Admin.php");
    exit;
  }
  elseif($_POST['action']=='update'){
    header("Location: ../../ProductManagement/Views/UpdateProduct.php?id=". $productID);
    exit;
  }
  }

  $page="dashboard";
  if(isset($_GET['page'])){
    $page=$_GET['page'];
  }

  ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../Assets/Admin.css">
      <link rel="stylesheet" href="../../User_Profile_Management/Assets/AdminProfile.css">
    </head>
    <body>
      <div id="dashboardComponent">
          
        <div id="LeftBarDashBoard">
          <h2>AgriConnect</h2>
          <button id="dashboard">DashBoard</button>
          <br>
          <br>
          <button id="users">Employee</button>
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
          <button id="admin"> Profile <br>Admin
            <br>
            Agriconnect
          </button>
          <br>
          <br>
          
          <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
        </div>

      <div id="middleDashBoard">
        <?php include_once("../../User_Profile_Management/Views/AdminProfile.php");?>
        <?php include_once("EmoloyeeFarmer.php");?>
        <?php include_once("EmoloyeeshooOwner.php");?>
        <?php include_once("AdminProducts.php");?>
        <?php include_once("AdminRequest.php");?>
        <?php include_once("EmployeeRequest.php");?>
        <?php include_once("EmployeeSetting.php");?>
        <?php include_once("AdminUsers.php");?>
        <?php include_once("AdminOrders.php");?>
        <?php include_once("AdminSettings.php");?>

          <div id="dashboardView">
          <h1 id="welcomeText">Admin DashBoard
          <h3>Welcome back
        
          <?php 
          echo$_SESSION['FullnameAdmin'];
          ?> 
          ! Here's What's Happening Today
          </h3>
          </h1>
        
          <div id="infoOverAll">
          <p id="totalfarmers">
          Total Farmers
          <br>
          <?php  echo$_SESSION['countOfFarmer']?>
          </p>

            <p id="totalBuyer">
            Total Shops
            <br>
            <?php echo$_SESSION['countOfShopOwner'] ?>
            </p>

          <p id="totalEmployee">
          Total Employee
          <br>
        <?php  echo$_SESSION['CountEmployee']?>
          </p>
        </div>
        </div>
      
          </div>

      <div id="rightDashBoard">
  <h1>
    Notifications
  </h1>

  <div id="notifList">Loading...</div>
  <div id="buttonOfNotification">
  <button type="button" id="refreshNotif">Refresh</button>
  <button type="button" id="clearNotif">Clear</button>
  </div>


</div>


  </div>
      <script src="../Assets/Admin.js"></script>

      <script src="../Assets/notification.js"></script>

  


      <?php if(isset($_GET['page']) && $_GET['page'] === 'products'){?>
        <script>
          document.getElementById('products').click();
        </script>

        <?php
      } 
      ?>
  </body>
  </html>