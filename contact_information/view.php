

<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "select * from contact_information WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
//print_r($row);
?>
<table border="1" width="80%">
    <tr>
        <td>id</td>
        <td>Present Address</td>
        <td>Permanent Address</td>
        <td>District</td>
        <td>Home Phone</td>
        <td>Mobile</td>
        <td>Emergency Contact</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['presentaddress']?></td>
            <td><?php echo $row['permanentaddress']?></td>
            <td><?php echo $row['district']?></td>
            <td><?php echo $row['homephone']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['emergencycontact']?></td>
            <td><?php echo $row['email']?></td>
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
    <?php
    }
    ?>
</table>
header('location:list.php');

