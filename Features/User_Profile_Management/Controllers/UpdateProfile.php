    <?php
    require_once("../../AuthenticationSystem/Controllers/authCheck.php");
    require_once("../Models/ProfileModels.php");

    if(!isset($_POST['role'])) {
        echo "Invalid Request";
        exit;
    }

    $role = $_POST['role'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if($email==""||$name==""||$password==""){
        echo "Null Submission!";
        exit;
    }

    $status = false;

    if($role==="Admin"){
        $status = updateAdminProfile($email,$name,$password);
       
        if($status){
          $_SESSION['FullnameAdmin']=$name;
        }
       
        header("Location: ../../Dashboards/Views/Admin.php");
        exit;
    }
    elseif($role==="Employee"){
        $status=updateEmployeeProfile($email,$name,$password);
        
        if($status){
          $_SESSION['FullnameEmployy']=$name;
      } 
       
        header("Location: ../../Dashboards/Views/Employee.php");
        exit;
    }
    elseif($role==="Farmer"){
        $status=updateFarmerProfile($email,$name,$address,$password);
        
        if($status){
         $_SESSION['FullnameFarmer']=$name;
        } 

        header("Location: ../../Dashboards/Views/Farmer.php");
        exit;
    }
    elseif($role === "ShopOwner"){
        $status = updateShopOwnerProfile($email, $name, $address, $password);
       
        if($status){
          $_SESSION['FullnameShopOwner']=$name;
        } 

        header("Location: ../../Dashboards/Views/ShopOwner.php");
        exit;
    }
    else{
        echo "Invalid Role";
        exit;
    }
    ?>
