<?php
<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "select * from academic_information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="80%">
    <tr>
        <td>id</td>
        <td>Level of Education</td>
        <td>Exam title</td>
        <td>Group</td>
        <td>Institute</td>
        <td>Result</td>
        <td>Scale</td>
        <td>Passing Year</td>
        <td>Duration</td>
        <td>Achievement</td>
        <td>Action</td>
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
                <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
header('location:list.php');
