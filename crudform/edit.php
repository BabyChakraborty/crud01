<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "crudform");
$query = "select * from list where id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$radio=$row['gender'];
$birth=$row['birthday'];
$dob=explode('-',$birth);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>First Name:</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name'];?>" />

    <label>Last name:</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name'];?>" />

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <label>Re-enter Email:</label>
    <input type="text" name="re_enter_email" value="<?php echo $row['re_enter_email'];?>" />

    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password'];?>" />

    <label>Birthday:</label>
    <select name="birthyear">
        <option> - Year - </option>
        <option value="2014"<?php if($dob[0]=="2014") echo'selected';?>>2014</option>
        <option value="2013"<?php if($dob[0]=="2013") echo'selected';?>>2013</option>
        <option value="2012"<?php if($dob[0]=="2012") echo'selected';?>>2012</option>
        <br>
    </select>
    <select name="birthmonth">
        <option> - Month - </option>
        <option value="01"<?php if($dob[1]=="01") echo'selected';?>>january</option>
        <option value="02"<?php if($dob[1]=="02") echo'selected';?>>february</option>
        <option value="03"<?php if($dob[1]=="03") echo'selected';?>>March</option>
        <br>
    </select>

    <select name="birthday">
        <option> - Day - </option>
        <option value="1"<?php if($dob[2]=="1") echo'selected';?>>1</option>
        <option value="2"<?php if($dob[2]=="2") echo'selected';?>>2</option>
        <option value="3"<?php if($dob[2]=="3") echo'selected';?>>3</option>
    </select>
    <br>
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male" <?php if($radio=='Male') echo 'checked="checked"'; ?> />Male
    <input type="radio" name="gender" value="Female" <?php if($radio=='Female') echo 'checked="checked"'; ?> />Female
    <br>

    <label>Comment: </label>
    <textarea name="comment"><?php echo $row['comment']?></textarea

    <input type="hidden" name="created" value="<?php echo $rows['created']?>" />

    <input type="hidden" name="modified" value="<?php echo $rows['modified']?>" />

    <button type="submit">Update</button>
</form>
<a href="list.php"><b>Go to List</b></a>