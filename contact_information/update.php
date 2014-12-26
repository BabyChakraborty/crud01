
<?php
$id = $_POST['id'];
$presentaddress = $_POST['presentaddress'];
$permanentaddress = $_POST['permanentaddress'];
$district = $_POST['district'];
$homephone = $_POST['homephone'];
$mobile = $_POST['mobile'];
$emergencycontact = $_POST['emergencycontact'];
$email = $_POST['email'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "UPDATE `ftflbatch2`.`contact_information` SET `presentaddress` = '".$presentaddress."',
`permanentaddress` = '".$permanentaddress."',
`district` = '".$district."',
`homephone` = '".$homephone."',
`mobile` = '".$mobile."',
`emergencycontact` = '".$emergencycontact."',
`email` = '".$email."',
WHERE `contact_information`.`id` = $id;";
mysqli_query($link, $query);
header('location:list.php');
?>