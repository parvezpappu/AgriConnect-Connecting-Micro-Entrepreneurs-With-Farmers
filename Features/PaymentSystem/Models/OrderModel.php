<?php
require_once('../../AuthenticationSystem/Models/db.php');

function saveOrder($email, $address, $totalAmount, $method)
{
    $con = getConnection();
    $sql = "INSERT INTO orderhistory (userEmail, address, totalAmount, paymentMethod)
            VALUES  ('$email', '$address', '$totalAmount', '$method')";
   
   $result = mysqli_query($con, $sql);
    return $result;
}
