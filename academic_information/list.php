<?php
$link = mysqli_connect("localhost",
"root",
"lict@2",
"ftflbatch2");
$query = "select * from  academic_information;";
$result = mysqli_query($link, $query);
?>
<ul>
    <li><a href="create.html">Create New</a> </li>
</ul>
<table border="1" width="80%">
    <tr>
        <td>id</td>
        <td>level of Education</td>
        <td>Exam Title</td>
        <td>Group</td>
        <td>Institute</td>
        <td>Result</td>
        <td>scale</td>
        <td>Passing Year</td>
        <td>Duration</td>
        <td>Achievement</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['levelofeducation']?></td>
            <td><?php echo $row['examtitle']?></td>
            <td><?php echo $row['group']?></td>
            <td><?php echo $row['institute']?></td>
            <td><?php echo $row['results']?></td>
            <td><?php echo $row['scale']?></td>
            <td><?php echo $row['passingyear']?></td>
            <td><?php echo $row['duration']?></td>
            <td><?php echo $row['achievement']?></td>
            <td>
                <a href="view.php?id=<?php echo $row['id']?>">View</a> |
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>