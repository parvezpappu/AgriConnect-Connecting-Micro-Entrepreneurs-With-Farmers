<?php
   require_once('../../AuthenticationSystem/Models/db.php');
  
 function getAllOrders($shopOwnerEmail)
  {
      $con = getConnection();
      $sql = "select * from orderhistory where userEmail='$shopOwnerEmail'";
      $result = mysqli_query($con, $sql);
      return $result;
  }

?>