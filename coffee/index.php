<?php
require_once 'config/connect.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Book</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #b36f64;
        color: white;
    }

    td {
        background: #6f4e37;

    }
</style>
<body>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>latinName</th>
        <th>description</th>
    </tr>

    <?php
    $products = mysqli_query($connect, query: "SELECT * FROM `coffee` ");
    $products = mysqli_fetch_all($products);
    foreach ($products as $product) {
        ?>
        <tr>
            <th><?= $product[0] ?></th>
            <th><?= $product[1] ?></th>
            <th><?= $product[2] ?></th>
            <th><?= $product[3] ?></th>
            <th><a href="update.php?id=<?= $product[0] ?>">Update</a> </th>
            <th><a style="color: darkred" href="vendor/delete.php?id=<?= $product[0] ?>">Delete</a> </th>

        </tr>

        <?php
    }
    ?>
</table>
<form method="post" action="vendor/create.php">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="description"></textarea>
    <p>Price</p>
    <input type="number" name="price"><br><br>
    <button type="submit"> Add New Product</button>

</form>
</body>
</html>