<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "select * from contact_information where id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

var_dump($id, $row);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />

    <label>Present Address:</label>
    <input type="text" name="presentaddress" value="<?php echo $row['presentaddress'];?>" />

    <label>Permanent Address:</label>
    <input type="text" name="permanentaddress" value="<?php echo $row['permanentaddress'];?>" />


     label>District</label><span>*</span>
    <select name="district">
        <option value="Dhaka"<?php if($row['district']=="Dhaka") echo'selected';?>>Dhaka</option>
        <option value="Chittagong"><?php if($row['district']=="Chittagong") echo'selected';?>>Chittagong</option>
        <option value="Comilla"<?php if($row['district']=="Comilla") echo'selected';?>>Comilla</option>
        <option value="Rajshahi"<?php if($row['district']=="Rajshahi") echo'selected';?>>Rajshahi</option>
        <option value="Sylhet"<?php if($row['district']=="Sylhet") echo'selected';?>>Sylhet</option>
        <option value="Jessore" <?php if($row['district']=="Jessore") echo'selected';?>>Jessore</option>
        <option value="Dinajpur"<?php if($row['district']=="Dinajpur") echo'selected';?>>Dinajpur</option>
        <option value="Barisal"<?php if($row['district']=="Barisal") echo'selected';?>>Barisal</option>
        </select>

    <label>Home Phone:</label>
    <input type="text" name="homephone" value="<?php echo $row['homephone'];?>" />


    <label>Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $row['mobile'];?>" />

    <label>Emergency Contact</label>
    <input type="text" name="emergencycontact" value="<?php echo $row['emergencycontact'];?>" />

    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email'];?>" />

    <button type="submit">Save</button>
</form>