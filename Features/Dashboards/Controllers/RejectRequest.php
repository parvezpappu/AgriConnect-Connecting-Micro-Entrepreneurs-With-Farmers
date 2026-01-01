    <?php
    require_once(".../../AuthenticationSystem/Models/db.php");

    if(isset($_POST['reject'])){

        $email=$_POST['email'];
        if($email==""){
            echo "Invalid Request";
            exit;
        }
        $con=getConnection();
        $sql="DELETE FROM request WHERE Email='$email'";
        mysqli_query($con, $sql);

        header("Location: ../Views/Employee.php");
        exit;
    }
    else{
        header("Location: ../Views/Employee.php");
        exit;
    }
    ?>
