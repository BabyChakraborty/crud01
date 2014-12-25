
<?php
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query="INSERT INTO `ftflbatch2`.`personal_info` (
                                        `name` ,
                                        `father` ,
                                        `mother` ,
                                        `gender` ,
                                        `religion` ,
                                        `date_of_birth` ,
                                        `national_id` ,
                                        )
                                        VALUES (
                                             '".$_POST['name']."', '".$_POST['father']."', '".$_POST['mother']."',
                                             '".$_POST['gender']."', '".$_POST['religion']."', '".$_POST['bday']."',
                                             '".$_POST['national_id'].");";



mysqli_query($link, $query);

header('location:list.php');