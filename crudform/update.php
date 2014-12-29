
<?php
$id = $_POST['id'];
$dob2=$_POST['birthyear'].'-'.$_POST['birthmonth'].'-'.$_POST['birthday'];
/*$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST['email'];
$re_enter_email= $_POST['re_enter_email'];
$password = $_POST['password'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$created = $_POST['created'];
$modified = $_POST['modified'];*/

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crudform");
/*$query = "UPDATE `crudform`.`list` SET `first_name` = '".$first_name."',
`last_name` = '".$last_name."',
`email` = '".$email."',
`re_enter_email` = '".$re_enter_email."',
`password` = '".$password."',
`birthday` = '".$birthday."',
`gender` = '".$gender."',
`created` = '".$created."',
`modified` = '".$modified."',
WHERE `list`.`id` = $id;";
mysqli_query($link, $query);*/

$query="UPDATE `crudform`.`list` SET `first_name` = '$_POST[first_name]',
`last_name` = '$_POST[last_name]',
`email` = '$_POST[email]',
`re_enter_email` = '$_POST[re_enter_email]',
`password`='$_POST[password]',
`birthday`='$dob2',
`gender` = '$_POST[gender]',
`comment` = '$_POST[comment]',
`modified` = NOW( ) WHERE `list`.`id` =$id;";
mysqli_query($link, $query);
header('location:list.php');