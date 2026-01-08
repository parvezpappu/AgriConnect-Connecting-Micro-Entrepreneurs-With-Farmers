 
  
<?php
      require_once('../Controllers/PaymentController.php');

      $emailValue = "";
      if(isset($_COOKIE['rememberEmail']))
      {
         $emailValue = $_COOKIE['rememberEmail'];
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment</title>
    <link rel="stylesheet" href="../Assets/Payment.css">
</head>

<body>
 
  <div id="PaymentContent">
      <h2 id="PaymentMSG">Payment System</h2>
  
      <form method="post" onsubmit="return Validate()">

           <input type="hidden" name="totalCost" value="<?php echo $totalAmount; ?>">
           <label>Email </label>
           <input type="email" name="email" id="email" value="<?php echo $emailValue; ?>" placeholder="Enter you email"><br><br>
   
           <label>Address </label><br>
           <textarea name="address" rows="3" id="textarea" placeholder="Enter delivery address"></textarea><br><br>
   
           <label>Payment Method :</label>
           <div class="methodBox">
               Cash on Delivery
           </div>
   
           <div class="total">
               Total Amount: <strong>$<?php echo $totalAmount; ?></strong>
           </div>
           <br>
        
           <button type="submit" name="confirmPayment" id="submitButton"> Confirm Order </button>

      </form>
  </div>
           <script src="../Assets/EmailValidate.js"></script>
</body>
 </html>
 