<?php
require_once '../config/connect.php';

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
mysqli_query($connect, query: "INSERT INTO `coffee` ( `name`, `description`, `price`) VALUES ('$title', '$description','$price') ");
header('Location: /coffee');