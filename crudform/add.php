
<?php
//print_r($_REQUEST);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$re_enter_email = $_POST['re_enter_email'];
$password= $_POST['password'];
$birthday1 = $_POST['birthyear'].'-'.$_POST['birthmonth'].'-'.$_POST['birthday'];
$gender = $_POST['gender'];
$comment = $_POST['comment'];
$created = $_POST['created'];
$modified = $_POST['modified'];

$link = mysqli_connect("localhost","root","lict@2","crudform");
$query = "INSERT INTO `crudform`.`list` (`first_name`, `last_name`, `email`, `re_enter_email`, `password`, `birthday`, `gender`, `comment`,`created`,`modified`)
VALUES ('$first_name', '$last_name', '$email', '$re_enter_email', '$password', '$birthday1', '$gender', '$comment',NOW(),'')";
//echo $query;
mysqli_query($link, $query);
header('location:list.php');
