<?php
// session_start();
require_once('../../ProductManagement/Models/productModel.php');
require_once('../../CartAndCheckout/Models/ProductcartModel.php');

if(isset($_POST['productID']))
 {
    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $stock = $_POST['stock'];

    addCart($productID, $productName, $productPrice, $stock);
    header("Location: ../../CartAndCheckout/Views/ShopOwnerCart.php");
 }

$res = getAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Products</title>
  <link rel="stylesheet" href="../../Dashboards/Assets/Admin.css" />
</head>
<body>

  <div id="productsView" style="display:none;">
    <h1>All Products</h1>

    <table border="1" width="100%">
      <thead>
        <tr>
          <th>Product ID</th>
          <th>Product Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Status</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <?php
        if ($res && mysqli_num_rows($res) > 0)
          {
            while ($row = mysqli_fetch_assoc($res))
           {
        ?>
          <tr>
            <td><?php echo $row['productID']; ?></td>
            <td><?php echo $row['productName']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['stock']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
              <img height="80" width="80"
                   src="../../ProductManagement/Assets/<?php echo $row['image']; ?>" />
            </td>
            <td>
              <form method="POST">
                <input type="hidden" name="productID" value="<?php echo $row['productID']; ?>">
                <input type="hidden" name="productName" value="<?php echo $row['productName']; ?>">
                <input type="hidden" name="productPrice" value="<?php echo $row['price']; ?>">
                <input type="hidden" name="stock" value="<?php echo $row['stock']; ?>">
                <button type="submit" id="AddToCart">Add To Cart</button>
              </form>
            </td>
          </tr>
        <?php
            }
        }
        ?>
      </tbody>
    </table>
    <a href="../../CartAndcheckout/Views/ShopOwnerCart.php" id="showCart">Show Cart</a>
  </div>

</body>
</html>