<?php
require_once('../../AuthenticationSystem/Models/db.php');

function getProductcart()
 {
     $con = getConnection();
     $sql = "select * from productcart";
     $result = mysqli_query($con, $sql);
     return $result;
 }



function addCart($productID, $productName, $productPrice,$stock)
 {
    $con = getConnection();
    $sql = "INSERT INTO productcart  VALUES ('$productID', '$productName', '$productPrice','$stock')";
    $result = mysqli_query($con, $sql);
    return $result;
  }



function removeCart($productID)
{
    $con = getConnection();
    $sql = "DELETE FROM productcart WHERE productID='$productID'";
    $result = mysqli_query($con, $sql);
    return $result;
}



function getStock($productID)
{
    $con = getConnection();
    $sql = "SELECT stock FROM productcart WHERE productID='$productID'";
    $result = mysqli_query($con, $sql);
    return $result;
}



?>