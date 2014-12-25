<?php

$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query = "select * from profile;";

$result = mysqli_query($link, $query);


?>


<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Father</td>
        <td>Mother</td>
        <td>Gender</td>
        <td>Religion</td>
        <td>Birthday</td>
        <td>National ID</td>
        <td>Birth Reg</td>
        <td>Passport Number</td>
        <td>SSC Board</td>
        <td>SSC Roll</td>
        <td>HSC Board</td>
        <td>HSC Roll</td>
        <td>Laptop</td>
        <td>Exam Center</td>
        <td>Mobile</td>
        <td>Home Phone</td>
        <td>Emergency Contact</td>
        <td>Email</td>
        <td>Alternate Email</td>
        <td>Current location</td>
        <td>Present Address</td>
        <td>Parmanent Address</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['father']?></td>
            <td><?php echo $row['mother']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['religion']?></td>
            <td><?php echo $row['date_of_birth']?></td>
            <td><?php echo $row['national_id']?></td>
            <td><?php echo $row['birth_reg']?></td>
            <td><?php echo $row['passport_num']?></td>
            <td><?php echo $row['ssc_board']?></td>
            <td><?php echo $row['ssc_roll']?></td>
            <td><?php echo $row['hsc_board']?></td>
            <td><?php echo $row['hsc_roll']?></td>
            <td><?php echo $row['laptop']?></td>
            <td><?php echo $row['exam_center']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['home_phone']?></td>
            <td><?php echo $row['emergency_contact']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['alternate_email']?></td>
            <td><?php echo $row['current_location']?></td>
            <td><?php echo $row['present_address']?></td>
            <td><?php echo $row['parmanent_address']?></td>
            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>



