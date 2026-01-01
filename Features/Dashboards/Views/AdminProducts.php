<?php
require_once('../../ProductManagement/Models/productModel.php');
$res = getAllProduct();
?>

<div id="productsView" style="display:none;">
<link rel="stylesheet" href="../Assets/Admin.css">

  <h1>All Products</h1>
 
  <table border="1" width="100%">
    <tr>
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Stock</th>
      <th>Status</th>
      <th>Image</th>
    </tr>
    
    <?php

    while($row=mysqli_fetch_assoc($res)){

    ?>

    <tr>
      <td><?php echo $row['productID'] ?></td>
      <td><?php echo $row['productName'] ?></td>
      <td><?php echo $row['category'] ?></td>
      <td><?php echo $row['price'] ?></td>
      <td><?php echo $row['stock'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td>
        <img height="50" width="50"  src="../../ProductManagement/Assets/<?php echo $row['image'] ?>" alt="No image">
      </td>
    </tr>

    <?php

    }
    ?>

  </table>
  <a href="../../ProductManagement/Views/AddProduct.php">
  <button id="addProduct">Add Product</button>
</a>
</div>
