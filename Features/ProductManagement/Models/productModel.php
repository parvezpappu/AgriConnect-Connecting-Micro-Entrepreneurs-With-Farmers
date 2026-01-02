<?php
require_once('../../AuthenticationSystem/Models/db.php');


function getAllProduct(){
    $con = getConnection();
    $sql = "select * from allproducts";
    $result = mysqli_query($con, $sql);
   // $arry=mysqli_fetch_assoc($result);
    //$count = mysqli_num_rows($result);
     //$duplicateArray=$arry;
    if (!$result){
        die("Query failed: " . mysqli_error($con));
    }

     //return [$result,$duplicateArray];
    return $result;

}


function addProduct($productName, $category, $price, $stock, $status, $image){
    $con= getConnection();
    $sql= "insert into allproducts(productName, category, price, stock, status, image) 
            values ('$productName', '$category', '$price', '$stock', '$status', '$image')";
    
    if(mysqli_query($con, $sql)){
        return true;

    }else{
        return false;
    }  
}

function deleteProduct($id){
    $con=getConnection();
    $sql="delete from allproducts where productID='$id'";

    return (mysqli_query($con, $sql));
      
}


?>