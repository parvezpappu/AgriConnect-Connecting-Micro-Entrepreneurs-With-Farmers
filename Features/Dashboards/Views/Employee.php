
 <?php
 require("../../AuthenticationSystem/Controllers/authCheck.php");
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Assets/Employee.css">

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
          <button id="reports">Request</button>
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
           <?php include("EmoloyeeFarmer.php");?>
           <?php include("EmployeeProduct.php");?>
           <?php include("EmoloyeeshooOwner.php");?>
           <?php include("EmployeeRequest.php");?>
           <?php include("EmployeeSetting.php");?>
           <div id="dashboardView">
         <h1 id="welcomeText">Employee DashBoard
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
          </div>
          </div>
        </div>

        <div id="rightDashBoard">
            <h1>Notifications</h1>
            <p>Farmer Request For Payment</p>
            <p>Order Placed From Farmer</p>
        </div>

     </div>
      <script src="../Assets/Employee.js"></script>
 </body>
 </html>