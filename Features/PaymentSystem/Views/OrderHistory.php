<?php
session_start();
require_once('../Models/OrderHistoryModel.php');

$res = getAllOrders();
$count = mysqli_num_rows($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History</title>
    <link rel="stylesheet" href="../../Dashboards/Assets/Admin.css">
</head>

<body>

<div id="dashboardComponent">

    
    <div id="LeftBarDashBoard">
        <h2>AgriConnect</h2>

        <button id="dashboard">Dashboard</button>
        <br><br>
        <button id="products">Products</button>
        <br><br>
        <button id="orders">Orders</button>
        <br><br>
        <button id="setting">Settings</button>
        <br><br>

        <a href="../../AuthenticationSystem/Controllers/Logout.php" id="logOut">Logout</a>
    </div>

    <div id="middleDashBoard">

        <h2>Order History</h2>

        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                </tr>
            </thead>

            <tbody>
            
            <?php
            if ($count > 0)
            {
                while ($row = mysqli_fetch_assoc($res))
                {
            ?>
                <tr>
                    <td><?php echo $row['userEmail']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>$<?php echo $row['totalAmount']; ?></td>
                    <td><?php echo $row['paymentMethod']; ?></td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>

        <br>
        <a id="back" href="../../Dashboards/Views/ShopOwnerProducts.php"> Back </a>

    </div>
</div>

</body>
</html>
