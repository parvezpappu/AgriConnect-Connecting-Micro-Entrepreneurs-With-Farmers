  <?php
  require_once('../../ProductManagement/Models/productModel.php');

  if (isset($_POST['productID'])) {
      deleteProduct($_POST['productID']);
  }
   //[$res,$duplicateArray]=getAllProduct();
   //$id=$duplicateArray['productID'];
     $res=getAllProduct();


  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../../Dashboards/Assets/Admin.css">
  </head>
  <body>
      <div id="productsView" style="display:none;">


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
        <th>Action</th>
      </tr>
      
      <?php
      if(mysqli_num_rows($res) > 0){
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
          <img height="80" width="80"  src="../../ProductManagement/Assets/<?php echo $row['image'] ?>">
        </td>
  <td>
                      <form method="post">
                          <input type="hidden" name="productID" value="<?= $row['productID'] ?>">
                          <button type="submit">Delete</button>
                      </form>
      </tr>

      <?php
      }
  }
  else{
      echo "Products not found!";
  }
  ?>

    </table>

  </div>

  <script src="../Controllers/Product.js"></script>
    
  </body>
  </html>

