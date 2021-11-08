<?php session_start()?>
<?php
$lname="";

//insert
		include "db.php";
		if(isset($_POST["insert"]))
		{
		
				$lname=$_POST["lname"];
				$price=$_POST["price"];
				
				$t='images/'.$_FILES['userImage']['name'];
				if(move_uploaded_file($_FILES['userImage']['tmp_name'],$t))
				{
				$sql="insert into apple values(0,'$lname','$t','$price')";	
				$res=mysqli_query($con,$sql)or die(mysql_error());
				if($res)
				{
					echo "<script>alert('Inserted')</script>";
					//header('Location:services.php');
				}
				
				}
		}
		$lname="";
		$price="";
		
		

	?>
	



<!doctype html>
<html class="no-js" lang="en">

<head>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
	<fieldset>
		<table style="margin:0px auto;">

		<tr>
		<td><label>Laptop Name</label></td>
			<td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
		</tr>
		<tr>
		<td><label>Image</label></td>
			<td><input name="userImage" type="file" value="<?php echo $img;?>"></td>
		</tr>
		<tr>
		<td><label>Price</label></td>
			<td><input type="number" name="price" value="<?php echo $price;?>"></td>
		</tr>
		
		<tr>
		<td><input type="submit" name="insert"  value="Insert"> </td>
		
		</tr>
		</table>
	</fieldset>
	
	
	<fieldset>
		<table style="margin:0px auto;">

		<tr>
		<td><label>Laptop Name</label></td>
			<td><select name="aid"><?php
							include "db.php";
							$sql="select * from apple";
							$res=mysqli_query($con,$sql);	
							while($row=mysqli_fetch_array($res))
							{
								echo "<option>$row[1]</option>";
							}
							
							
							
							?></select></td>
		</tr>
		<tr>
							<td>Details</td>
							<td><textarea name="desc"></textarea></td>
						</tr>
		
		<tr>
		<td><input type="submit" name="insert1"  value="Insert"> </td>
		
		</tr>
		</table>
	</fieldset>
	</form>
</body>
</html>	
<?php
		include "db.php";
		if(isset($_POST["insert1"]))
		{
			
			$desc=$_POST["desc"];
			$aid=$_POST["aid"];
			
			$sql1="select aid from apple where name like '$aid'";
            $res1=mysqli_query($con,$sql1);
			$row1=mysqli_fetch_array($res1);
			$sql2="insert into apple_details values(0,'$desc',$row1[0])";
	
				if(mysqli_query($con,$sql2))
				{
					echo '<script>alert ("Inserted");</script>';
				} 
		}
?>
