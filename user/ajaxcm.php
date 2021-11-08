<?php
include "db.php";
if($_POST['StateName'])
{
$id=$_POST['StateName'];

//$sql=mysqli_query($con,"select smid,sname,sm.price from service_master sm inner join image_s4 im4 on sm.sid=im4.sid where mid='$id'");
$sql=mysqli_query($con,"select sm.smid,cm.mid,cm.cmake,s4.sname,sm.price from car_make cm,service_master sm,image_s4 s4 where cm.mid=sm.mid and s4.sid=sm.sid and cm.cmake='$id'");
//echo "<select name='stype' class='stype'>";
//echo "<option></option>";
while($row=mysqli_fetch_array($sql))
{
echo "<input type='checkbox' name='chk[]' value=' ".$row[0]." '>".$row[3]."--".$row[4]."<br>";
}  
//echo "</select>";
}

?>