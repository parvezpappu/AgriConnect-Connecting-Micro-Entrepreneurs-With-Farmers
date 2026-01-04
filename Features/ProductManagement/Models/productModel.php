<?php
require_once('../../AuthenticationSystem/Models/db.php');

function getAllProduct(){
    $con=getConnection();
    $sql="select * from allproducts";
    $result=mysqli_query($con, $sql);
    
    if (!$result){
        die("Query failed: " . mysqli_error($con));
    }
    
    return $result;
}


function addProduct($productName, $category, $price, $stock, $status, $image){
    $con=getConnection();
    $sql="insert into allproducts values (null,'$productName', '$category', '$price', '$stock', '$status', '$image')";
    
    return mysqli_query($con, $sql);
}

function deleteProduct($id){
    $con=getConnection();
    $sql= "delete from allproducts where productID='$id'";
    
    return mysqli_query($con, $sql);
}

function updateProduct($id, $productName, $category, $price, $stock, $status, $image = ''){
    $con= getConnection();
    
    if($image !=''){
        $sql="update allproducts set 
        productName='$productName', 
        category='$category', 
        price='$price', 
        stock='$stock', 
        status='$status', 
        image='$image' 
        where productID='$id'";

    }
    else{
        $sql="update allproducts set 
        productName='$productName', 
        category='$category', 
        price='$price', 
        stock='$stock', 
        status='$status' 
        where productID='$id'";
    }
    
    return mysqli_query($con, $sql);
}

function getProductById($id){
    $con=getConnection();
    $sql="select * from allproducts where productID='$id'";
    $result=mysqli_query($con, $sql);

    if($result && mysqli_num_rows($result)>0){
        return mysqli_fetch_assoc($result);
    }
    return null;
}

?>