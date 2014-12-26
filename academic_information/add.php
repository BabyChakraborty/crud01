
<?php
$levelofeducation = $_POST['levelofeducation'];
$examtitle = $_POST['examtitle'];
$group= $_POST['group'];
$institute = $_POST['institute'];
$result = $_POST['results'];
$scale = $_POST['scale'];
$passingyear = $_POST['passingyear'];
$duration= $_POST['duration'];
$achievement = $_POST['achievement'];
$link = mysqli_connect("localhost","root","lict@2","ftflbatch2");
$query = "INSERT INTO `ftflbatch2`.`academic_information` (`levelofeducation`, `examtitle`, `group`, `institute`, `results`, `scale`,`passingyear`,`duration`,`achievement`)
VALUES ('$levelofeducation', '$examtitle', '$group', '$institute','$results', '$scale', '$passingyear','$duration','$achievement');";

mysqli_query($link, $query);
header('location:list.php');
