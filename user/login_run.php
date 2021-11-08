<?php 
session_start();
		include "db.php";
		if(isset($_POST['btnlog']))
		{
			$uname=$_POST['uname'];
			$pwd=$_POST['pwd'];
			$sql="select email,pass from registration";
			//$sql1="select ow_name from appointment where email='$uname'";
			$res=mysqli_query($con,$sql);
			/*$res1=mysqli_query($con,$sql1);
			$r = mysqli_fetch_assoc($res1);
			while($r = mysqli_fetch_assoc($res1))
			{
				$fname = $r['owname'];
			}	*/	
			$i =0;
			while($row=mysqli_fetch_array($res))
			{
				$u = $row['email'];
				$p = $row['pass'];
				if($uname==$u && $pwd==$p)
				{
						
						$i =1;
						break;
				}
			}
			if($i == 1)
			{
					
					$_SESSION['login_user']=$u;
					//$_SESSION['fname']=$fname;
					echo '<script> alert("Successful login now you can book appointment");window.location="index.php";</script>';
					//header("Location:http://localhost/Project/user/index.php");
					
			}
			else
			{
					//header("Location:http://localhost/Project/user/registration.php");
					echo '<script> alert("Register first");window.location="";</script>';
					
			}
			
		}
	?>