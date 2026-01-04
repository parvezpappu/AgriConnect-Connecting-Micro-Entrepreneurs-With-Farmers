   <?php
   session_start();

   require_once("../Models/adminModel.php");
   require_once("../Models/EmployeeModels.php");
   require_once("../../Dashboards/Models/FarmerModels.php");
   require_once("../../Dashboards/Models/ShopownerModels.php");

   if(isset($_POST['subMit'])){
       

      $admin=getAdmin(); //full array ta ache.
      [$employees,$count]=getAllEmployees();
      $userEmailLogin=$_POST['email'];
      $passwordLogin=$_POST['pasword']; 

      if($userEmailLogin==""||$passwordLogin==""){
         echo "Null Submission !";
         exit;
      }

      if($admin['Email']===$userEmailLogin&&$admin['Password'] === $passwordLogin){
         $_SESSION['valid'] = true;
         $_SESSION['FullnameAdmin'] = $admin['Name'];
         $_SESSION['role']  = 'admin';
         $_SESSION['AdminEmail'] = $admin['Email'];
         setcookie("valid","true",time()+5000,"/");
         header("location:../../Dashboards/Views/Admin.php");
         exit;
      }

      
      foreach($employees as $emp){
         if($emp['Email']===$userEmailLogin&&$emp['Password'] === $passwordLogin){
                $_SESSION['valid'] = true;
                $_SESSION['role']  = 'employee';
                $_SESSION['FullnameEmployy'] = $emp['Name'];
                $_SESSION['EmployeeEmail'] = $emp['Email'];
               setcookie("valid","true",time()+5000,"/");
               header("location:../../Dashboards/Views/Employee.php");
               exit;
         }
      }

      [$farmers,$farmersCount]=getAllFarmers();

      foreach($farmers as $farmer){

         if($farmer['Email']===$userEmailLogin&&$farmer['Password'] === $passwordLogin){
               $_SESSION['valid'] = true;
               $_SESSION['FullnameFarmer'] = $farmer['Name'];
               $_SESSION['role']  = 'farmer';
               $_SESSION['FarmerEmail'] = $farmer['Email'];
               setcookie("valid","true",time()+5000,"/");
               header("location:../../Dashboards/Views/Farmer.php");
               exit;
         }
      }

      [$shopOwners,$farmersCount]=getAllShopOwners();
      foreach($shopOwners as $owner){

         if($owner['Email']=== $userEmailLogin&&$owner['Password'] === $passwordLogin){
               $_SESSION['valid'] = true;
               $_SESSION['role']  = 'shopowner';
               $_SESSION['FullnameShopOwner']=$owner['Name'];
               $_SESSION['ShopOwnerEmail'] = $owner['Email'];
               setcookie("valid","true",time()+5000,"/");
               header("location:../../Dashboards/Views/ShopOwner.php");
               exit;
         }
      }

      echo "Invalid Email or Password";
      exit;
   }
   ?>
