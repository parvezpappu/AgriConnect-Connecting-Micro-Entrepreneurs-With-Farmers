<?php
require_once("../../AuthenticationSystem/Models/db.php");

function getAllFarmers(){

    $con = getConnection();
    $sql = "SELECT * FROM Farmer";
    $res = mysqli_query($con, $sql);

    $farmers = [];

    while($row = mysqli_fetch_assoc($res)){
        $farmers[] = $row;
    }

    return $farmers;
}
?>
