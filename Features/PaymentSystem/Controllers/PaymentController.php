<?php
  session_start();
  require_once('../Models/OrderModel.php');

 if(!isset($_POST['totalCost']) && !isset($_POST['confirmPayment']))
  {
      header("Location: ../../CartAndCheckout/Views/ShopOwnerCart.php");
      exit;
  }
  $totalAmount = $_POST['totalCost'];

 if(isset($_POST['confirmPayment']))
    {
       $email = $_SESSION['ShopOwnerEmail'];
       $address = $_POST['address'];
       $method = "Cash on Delivery";

       if($email=="" || $address=="")
       {
           echo "Enter valid Email and Address";
       }
       else if(strpos($email,'@') == false || strpos($email,'.') == false)
       {
            echo "Invalid email";
       }
       else
        {
            $status = saveOrder($email, $address, $totalAmount, $method);
            setcookie("rememberEmail", $email, time() + 86400, "/");
            header("Location: ../Views/orderHistory.php");
        }
    }
 ?>

