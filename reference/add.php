
<?php
//print_r($_REQUEST);
$name = $_POST['name'];
$organiation = $_POST['organiation'];
$address = $_POST['address'];
$phoneoffice = $_POST['phoneoffice'];
$phonehome= $_POST['phonehone'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$relation = $_POST['relation'];
$link = mysqli_connect("localhost","root","baby12","ftflbatch2");
$query = "INSERT INTO `ftflbatch2`.`reference` (`name`, `organiation`, `address`, `phoneoffice`, `phonehome`, `mobile`, `email`, `relation`)
VALUES ('$name', '$organiation', '$address', '$phoneoffice', '$phonehome', '$mobile', '$email', '$relation')";
//echo $query;
mysqli_query($link, $query);
header('location:list.php');
