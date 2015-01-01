<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "multiple");

$query = "select * from list;";

$result = mysqli_query($link, $query);
?>

<table border="1" width="100%">
    <tr>
        <td>Full Name</td>
        <td>Hobby</td>
        <td>Prefered Job Location</td>
        <td>Food</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['fname']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['location']?></td>
            <td><?php echo $row['food']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>
<a href="create.html">Create new</a>
