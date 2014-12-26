
<?php
$presentaddress = $_POST['presentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$district= $_POST['district'];
$homephone = $_POST['homephone'];
$mobile = $_POST['mobile'];
$emergencycontact = $_POST['emergencycontact'];
$email = $_POST['email'];
$link = mysqli_connect("localhost","root","lict@2","ftflbatch2");
$query = "INSERT INTO `ftflbatch2`.`contact_information` (`presentaddress`, `permanentaddress`, `district`, `homephone`, `mobile`, `emergencycontact`, `email`)
VALUES ('$presentaddress', '$permanentaddress', '$district', '$homephone', '$mobile', '$emergencycontact', '$email');";

mysqli_query($link, $query);
header('location:list.php');


