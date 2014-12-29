<?php

$link = mysqli_connect("localhost",
"root",
"lict@2",
"crudform");

$query = "select * from list;";

$result = mysqli_query($link, $query);
?>

<table border="1" width="100%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Re-enter Email</td>
        <td>Password</td>
        <td>Birthday</td>
        <td>Gender</td>
        <td>Comment</td>
        <td>Created</td>
        <td>Modified</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['first_name']?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['re_enter_email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['birthday']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['comment']?></td>
            <td><?php echo $row['created']?></td>
            <td><?php echo $row['modified']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>

    <?php
    }
    ?>

</table>
<a href="create.html">Create new</a>


