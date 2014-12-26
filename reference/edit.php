<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "select * from reference where id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>"
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name'];?>" />
    <label>Organiation:</label>
    <input type="text" name="organiation" value="<?php echo $row['organiation'];?>" />
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address'];?>" />
    <label>Phone (Office):</label>
    <input type="text" name="phoneoffice" value="<?php echo $row['phoneoffice'];?>" />
    <label>Phone (Home)</label>
    <input type="text" name="phonehome" value="<?php echo $row['phonehome'];?>" />
    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />
    <label>Relation:</label>
    <input type="text" name="relation" value="<?php echo $row['relation'];?>" />
    <button type="submit">Save</button>
</form>


