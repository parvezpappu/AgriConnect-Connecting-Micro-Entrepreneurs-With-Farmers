
     
    <?php
    require_once("../Controllers/authCheck.php");
    session_start();
    echo'welcome';
    echo" ", $_SESSION['Fullname'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
            <a href="../Controllers/Logout.php">Logout</a>

    </body>
    </html>