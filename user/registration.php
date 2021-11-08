
<html>
<head>
<style>
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
</style>
</head>
<body>
<center>
<form name="frmRegistration" method="post" action="" >
	<table border="0" width="500" class="demo-table" >
		
		
		<tr>
			<td>Customer Name</td>
			<td><input type="text" class="demoInputBox" name="firstName" value="<?php ?>" required ></td>
		</tr>
		
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
			<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
			</td>
		</tr>
		<tr>
			<td>Phone No.</td>
			<td><input type="text" class="demoInputBox" name="phone" value="<?php ?>" pattern="^[0-9]{10}$" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email" class="demoInputBox" name="userEmail" value="<?php ?>" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" class="demoInputBox" name="password" placeholder="password" value="<?php ?>" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]){8,}$" required></td>
		</tr>
		
		
		
		
		<tr>
		<td>
		<input type="submit" name="register-user" value="Register" class="btnRegister">
		
		</td>
		</tr>
	</table>
	
</form>
</center>
</body>
</html>
	
<?php

include "db.php";
if(isset($_POST["firstName"]))
{
	$firstName=$_POST['firstName'];
	
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$userEmail=$_POST['userEmail'];
	$password=$_POST['password'];
	
	$sql="insert into registration values(0,'$firstName','$gender','$phone','$userEmail','$password')";
	if(mysqli_query($con,$sql))
	{
		
		echo '<script> alert("Thanks for registration now login ");window.location="index.php";</script>';
		$firstName="";
	$gender="";
	$phone="";
	$userEmail="";
	$password="";
	}
}


	
	
	
?>