<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftflbatch2");
$query = "select * from academic_information where id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>"

           label>Level of Education:</label><span>*</span>
    <select name="levelofeducation">
        <option value="B.Sc(Engr)"<?php if($row['levelofeducation']=="Dhaka") echo'selected';?>>B.Sc(Engr)</option>
        <option value="diploma"><?php if($row['district']=="diploma") echo'selected';?>>diploma</option>
        <option value="B.Sc(honrs)"<?php if($row['district']=="B.Sc(honrs)") echo'selected';?>>B.Sc(honrs)</option>
    </select>

    <label>Exam Title:</label>
    <input type="text" name="examtitle" value="<?php echo $row['examtitle'];?>" />


    <label>Group:</label>
    <input type="text" name="group" value="<?php echo $row['group'];?>" />

    <label>Institute:</label>
    <input type="text" name="institute" value="<?php echo $row['institute'];?>" />

    <label>Result:</label>
    <input type="text" name="results" value="<?php echo $row['results'];?>" />

    <label>scale:</label>
    <input type="text" name="scale" value="<?php echo $row['scale'];?>" />

    <label>Passing Year:</label>
    <input type="text" name="passingyear" value="<?php echo $row['passingyear'];?>" />

    <label>duration:</label>
    <input type="text" name="duration" value="<?php echo $row['duration'];?>" />

    <label>Achievement:</label>
    <input type="text" name="achievement" value="<?php echo $row['achievement'];?>" />

    <button type="submit">Save</button>
</form>