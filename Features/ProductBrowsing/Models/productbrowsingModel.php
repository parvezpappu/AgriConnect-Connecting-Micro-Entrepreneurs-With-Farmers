<?php
require_once('../../AuthenticationSystem/Models/db.php');

function searchProducts($searchProduct){
    $con=getConnection();
    $searchQuery="select * from allproducts
                  where productID like '%$searchProduct%'
                  or productName like '%$searchProduct%'
                  or category like '%$searchProduct%'
                  order by productID desc";

    $result=mysqli_query($con, $searchQuery);
    if(!$result){
        die("Error: ".mysqli_error($con));
    }

    return $result;
}

?>