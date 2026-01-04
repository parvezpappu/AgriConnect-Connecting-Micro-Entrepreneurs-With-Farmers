<?php
require_once("../Models/RequestModels.php");

if(isset($_POST['submit'])){

    $userEmail=$_POST['emailS'];
    $fullName=$_POST['fullname'];
    $address=$_POST['address'];
    $passwordCreate=$_POST['createPass'];
    $passwordConfirm=$_POST['confirmPass'];
    $role=$_POST['user_type'];

    if($userEmail==""||$fullName==""||$address==""||$passwordCreate==""||$passwordConfirm==""||$role==""){
        echo "Null Submission!";
        exit;
    }

    if($passwordConfirm != $passwordCreate){
        echo "Create Password And Confirm Password Should Be Matched";
        exit;
    }
     //request database e insert hocce...cause pending.
    $status=insertRequest($fullName,$userEmail,$address,$passwordConfirm,$role);

    if($status){
        echo "Request submitted successfully. Please wait for Your approval.";
    }else{
        echo "Request submission failed!";
    }

}else{
    header('location:../Views/SignUp.html');
    exit;
}
?>
