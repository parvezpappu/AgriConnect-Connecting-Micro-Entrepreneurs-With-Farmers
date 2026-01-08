<?php
require_once('../Models/productModel.php');

if(isset($_POST['submit'])){
    $id = $_POST['productID'];
    $productName = $_POST['productName'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $status = $_POST['status'];
    
    $imageName = $product['image'];
    
    if(!empty($_FILES['image']['name'])){
    $src= $_FILES['image']['tmp_name'];
    $ext = explode('.', $_FILES['image']['name']);
    $index = count($ext) -1;
    $imageName = time().".".$ext[$index];
    $des = '../Assets/'.$imageName;

    if(move_uploaded_file($src, $des)){
        echo "Image Added!";
    }
    else{
        echo "Failed to upload the image!";
    }
}
$result = updateProduct($id, $productName, $category, $price, $stock, $status, $imageName);

if($result){
    header("Location: ../../Dashboards/Views/Admin.php?");
    exit;
}
else{
    echo "Failed to upload the image!";
}
}

$product=null;
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $product=getProductById($id);
}

$res = getAllProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="../Assets/UpdateProduct.css">
    
</head>
<body>

<div id="productsView">
  
<?php

if($product){
?>
    
    <h1>Update Product</h1>
    
    <div class="updateForm">
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="productID" value="<?php echo $product['productID'];?>">
            <div class="formTitle">
                <label>Product Name:</label>
                <input type="text" name="productName" value="<?php echo $product['productName'];?>">
            </div>
            
            <div class="formTitle">
                <label>Category:</label>
                <input type="text" name="category" value="<?php echo $product['category'];?>">
            </div>
            
            <div class="formTitle">
                <label>Price:</label>
                <input type="number" name="price" value="<?php echo $product['price'];?>">
            </div>
            
            <div class="formTitle">
                <label>Stock:</label>
                <input type="text" name="stock" value="<?php echo $product['stock']; ?>" required>
            </div>
            
            <div class="formTitle">
                <label>Status:</label>
                <input type="text" name="status" value="<?php echo $product['status']; ?>" required>
            </div>
            
            <div class="formTitle">
                <label>Current Image:</label>
                <img src="../Assets/<?php echo $product['image']; ?>" height="80" width="80">
            </div>
            
            <div class="formTitle">
                <label>Upload New Image:</label>
                <input type="file" name="image">
            </div>
            
            <button type="submit" name="submit" class="submit" onclick="return confirm('Are you sure you want to update this product?')">Update Product</button>
            <a href="../../Dashboards/Views/Admin.php" class="cancel">Cancel</a>
        </form>
    </div>
    
    <?php

    }
    else{    
    ?>
    <h1>Select Product to Update</h1>
    
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
        if(mysqli_num_rows($res)> 0){
            while($row=mysqli_fetch_assoc($res)){
        ?>
        
        <tr>
            <td><?php echo $row['productID']?></td>
            <td><?php echo $row['productName']?></td>
            <td><?php echo $row['category']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['stock']?></td>
            <td><?php echo $row['status']?></td>
            <td>
                <img height="80" width="80" src="../Assets/<?php echo $row['image']?>">
            </td>
            <td>
                <a href="UpdateProduct.php?id=<?php echo $row['productID']?>">
                    <button id='updateButton'>Update</button>
                </a>
            </td>        
        </tr>
        
        <?php
        }
    }
    else{
        echo "<tr><td colspan='8'>Products not found!</td></tr>";
    }

    ?>
    <?php
    }
    ?>
    
    </table>
    
    <a href="../../Dashboards/Views/Admin.php" id="back">Back</a>
</div>
</body>
</html>