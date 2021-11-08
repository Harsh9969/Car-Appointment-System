<?php session_start()?>
<?php
//edit
		include "db.php";
	$pid=$_GET["e"];
	
	 $sql="select * from image_s4 where sid='$pid'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($res);
		
		//update
if(isset($_POST["upd"]))
{
	$sname=$_POST["sname"];
	$intro=$_POST["intro"];
	$sql="update image_s4 set sname='$sname',intro='$intro' where sid='$pid' ";
		$rs=mysqli_query($con,$sql);
		if($rs)
			header('Location:services.php');
		else
			echo "Record is not updated due to some error";
	
	
	
}





 
 
	?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="css/typography.css">
    <link rel="stylesheet" href="css/default-css.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
</head>




<body>
  
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('siderbar.php');?>
	
        <!-- sidebar menu area end -->
        <!-- main content area start -->
		<div class="main-content">
		 <?php include('header.php');?>

	<form method="post" enctype="multipart/form-data">
	<fieldset>
		<table style="margin:0px auto;">

		<tr>
		<td><label>Service Name</label></td>
			<td><input type="text" name="sname" value="<?php echo $row[1];?>"></td>
		</tr>
		<tr>
		<td><label>Image</label></td>
			<td><input name="userImage" type="file" value="<?php echo $row[2];?>"><img src="<?php echo $row[2];?>" ></td>
		</tr>
		<tr>
		<td><label>Intro</label></td>
			<td><textarea name="intro" rows=5 col=25><?php echo $row[3];?></textarea></td>
		</tr>
		
		<tr>
		
		<td><input type="submit" name="upd"  value="update"> </td>
		</tr>
		</table>
	</fieldset>
	</form>
</div>
</div>


 <!-- jquery latest version -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    
    <!-- all line chart activation -->
    <script src="js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>	

