<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, query: "UPDATE `coffee` SET `name` = '$title', `description` = '$description', `price` = '$price' WHERE `coffee`.`id` = '$id'");
header('Location: /');