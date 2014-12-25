<?php
$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query="INSERT INTO `ftflbatch2`.`profile` (
                                        `name` ,
                                        `father` ,
                                        `mother` ,
                                        `gender` ,
                                        `religion` ,
                                        `date_of_birth` ,
                                        `national_id` ,
                                        `birth_reg` ,
                                        `passport_num` ,
                                        `ssc_board` ,
                                        `ssc_roll` ,
                                        `hsc_board` ,
                                        `hsc_roll` ,
                                        `laptop` ,
                                        `exam_center` ,
                                        `mobile` ,
                                        `home_phone` ,
                                        `emergency_contact` ,
                                        `email` ,
                                        `alternate_email` ,
                                        `current_location` ,
                                        `present_address` ,
                                        `parmanent_address`
                                        )
                                        VALUES (
                                             '".$_POST['name']."', '".$_POST['father']."', '".$_POST['mother']."',
                                             '".$_POST['gender']."', '".$_POST['religion']."', '".$_POST['bday']."',
                                             '".$_POST['national_id']."', '".$_POST['birth_reg']."', '".$_POST['passport_num']."',
                                             '".$_POST['sscboard']."', '".$_POST['ssc_roll']."',
                                             '".$_POST['hscboard']."', '".$_POST['hsc_roll']."', '".$_POST['laptop']."',
                                             '".$_POST['center']."', '".$_POST['mobile']."',
                                             '".$_POST['home_phone']."', '".$_POST['emergency']."', '".$_POST['email']."',
                                             '".$_POST['alt_email']."', '".$_POST['current_location']."', '".$_POST['present_address']."', '".$_POST['permanent_address']."'
                                        );";



mysqli_query($link, $query);

header('location:show_info.php');

