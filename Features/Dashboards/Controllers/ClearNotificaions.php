    <?php
    session_start();
    require_once("../Models/notifactionModels.php"); 


    if(!isset($_SESSION['valid']) || $_SESSION['valid'] !== true){
        echo json_encode(["error" => "unauthorized"]);
        exit;
    }

    if(!isset($_SESSION['role']) || $_SESSION['role'] !== "admin"){
        echo json_encode(["error" => "forbidden"]);
        exit;
    }

    clearAllNotifications();

    echo json_encode(["success" => true]);
    exit;
    ?>
