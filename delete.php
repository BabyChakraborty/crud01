<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query = "DELETE FROM `ftflbatch2`.`profile` WHERE `profile`.`id` = $id";

mysqli_query($link, $query);

header('location:show_info.php');