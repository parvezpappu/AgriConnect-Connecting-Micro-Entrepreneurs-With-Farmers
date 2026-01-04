<?php
   require_once('../../AuthenticationSystem/Models/db.php');
  
 function getAllOrders()
  {
      $con = getConnection();
      $sql = "select * from orderhistory";
      $result = mysqli_query($con, $sql);
      return $result;
  }

?>