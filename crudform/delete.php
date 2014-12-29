<?php

$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crudform");
$query = "DELETE FROM `crudform`.`list` WHERE `list`.`id` = $id";
mysqli_query($link, $query);
header('location:list.php');
