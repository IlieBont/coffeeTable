<?php

require_once '../config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query:"DELETE FROM `coffee` WHERE `coffee`.`id` = '$id'" );
header('Location: ../index.php');