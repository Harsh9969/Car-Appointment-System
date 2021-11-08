<?php session_start();?>
<?php
 include "db.php";
if(isset($_GET["d"]))
{
 $id=$_GET["d"];
 //echo $id;
 $sql3="select * from appointment where aid='$id'";
 //echo $sql3;
 $res3=mysqli_query($con,$sql3);
 $row1=mysqli_fetch_array($res3);
// print_r($row1);
	$nm=$row1['ow_name'];
	//print_r($nm);
	$d=$row1['date'];
	$t=$row1['time'];
	$cno=$row1['car_no'];
	$cm=$row1['car_make'];
	$p=$row1['phone'];
	$e=$row1['email'];
	$sql2="insert into cancel_app values(0,'$nm','$d','$t','$cno','$cm','$p','$e')";
	//echo $sql2;
	$res4=mysqli_query($con,$sql2);
	
 
 $sql="delete from appoinment_type where aid='$id'";
 $res=mysqli_query($con,$sql);
$sql1="delete from appointment where aid='$id'";
$res1=mysqli_query($con,$sql1);
//echo $res;
echo "<script>alert('deleted');</script>";

}

?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

   <!-- <link href="css/bootstrap.css" rel="stylesheet" media="all">-->

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<h2 align="center">Booking Cancellation</h2>
<a href="index.php" style="float:right"><img src="images/home.jpg" width=80px></a>
<div class="table-responsive table-no-card m-b-30">
<table class="table table-borderless table-striped table-earning">
					<tr>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>Car NO.</th>
						<th>Car Make</th>
						<th>Phone</th>
						<th>Email</th>
						<th></th>
					</tr>
	<?php
		include "db.php";
		$em=$_SESSION['login_user'];
		$sql="select * from appointment where email='$em' ";
		//echo $sql;
		
		$res=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($res))
		{
			$id=$row['aid'];
			//echo $id;
			echo '<tr>
					<td>'.$row['ow_name'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.$row['time'].'</td>
					<td>'.$row['car_no'].'</td>
					<td>'.$row['car_make'].'</td>
					<td>'.$row['phone'].'</td>
					<td>'.$row['email'].'</td>
					<td><a href="?d='.$id.'"><button class="btn btn-info" name="cancel">Cancel</button></a></td>
				</tr>';
		}
	?>
</table>
</div>
<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>