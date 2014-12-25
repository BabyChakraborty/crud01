
<?php

$link = mysqli_connect("localhost",
    "root",
    "baby12",
    "ftflbatch2");

$query = "select * from personal_info;";

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
            <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>





