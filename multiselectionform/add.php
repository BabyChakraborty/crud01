<?php
echo'<pre>';
print_r($_POST);
echo '</pre>';
$fname = $_POST['fname'];
$location = $_POST['location'];
$created = $_POST['created'];
$modified= $_POST['modified'];

$link = mysqli_connect("localhost","root","lict@2","multiple");

$hobby=" ";

if (isset($_POST['h_tar']) && !empty($_POST['h_tra']))
{
    $hobby .=($_POST['h_tra']).',';
}
if (isset($_POST['h_sin']) && !empty($_POST['h_sin']))
{
    $hobby .=($_POST['h_sin']).',';
}

if (isset($_POST['h_gar']) && !empty($_POST['h_gar']))
{
    $hobby .=($_POST['h_gar']).',';
}
if (isset($_POST['h_rea']) && !empty($_POST['h_rea']))
{
    $hobby .=($_POST['h_rea']).',';
}
//$hobby=rtrim($hobby,',');//

$hobby=substr($hobby,0,-1);
echo $hobby;
echo"<br/>";

$location=$_POST['location'];
$location= implode(",",$location);
echo $location;
echo "<br/>";

$food= $_POST['food'];
$food = implode(",",$food);
echo $food;
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multiple");


$query="INSERT INTO `multiple`.`list` (
                                        `fname` ,
                                        `hobby` ,
                                        `location` ,
                                        `food` ,
                                        `created` ,
                                        `modified` ,
                                        )
                                        VALUES (
                                             '$fname','$hobby', $location'.'$food'],NOW(),'')";



mysqli_query($link, $query);
header('location:list.php');


