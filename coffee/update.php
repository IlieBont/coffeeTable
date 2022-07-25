<?php
require_once 'config/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, query: "SELECT * FROM `coffee` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>


<!doctype htmL>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Update</title>
</head>
<body>
<h3>Update Product</h3>
<form method="post" action="vendor/create.php">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <p>Title</p>
    <input type="text" name="title" value="<?= $product['name'] ?>">
    <p>Description</p>
    <textarea name="description"><?= $product['description'] ?></textarea>
    <p>Price</p>
    <input type="number" name="price" value="<?= $product['price'] ?>"><br><br>
    <button type="submit"> Update Product</button>

</form>


</body>
</html>
