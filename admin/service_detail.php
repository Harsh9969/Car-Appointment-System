<?php session_start();?>
<?php
	include "db.php";
	$sql="select * from image_s4";
$res=mysqli_query($con,$sql);
											
											
?>

<html>
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
						<form method="post">
						<h1 align=center>Details</h1><br><br><br><br>
						<table style="margin:0px auto;"> 



						<tr>
							<td>Service Name</td>
							<td><select name="sid"><?php
							
							while($row=mysqli_fetch_array($res))
							{
								echo "<option >$row[1]</option>";
							}
							
							
							
							?></select></td>
						</tr>
						<tr>
							<td>Description</td>
							<td><textarea name="desc"></textarea></td>
						</tr>
						<tr>
							<td><input type="submit" name="insert" id="insert" value="Insert"> </td>
						</tr>
						</table>
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
<?php

		if(isset($_POST["insert"]))
		{
			
			$desc=$_POST["desc"];
			$sid=$_POST["sid"];
			
			$sql1="select sid from image_s4 where sname like '$sid'";
            $res1=mysqli_query($con,$sql1);
			$row1=mysqli_fetch_array($res1);
			$sql2="insert into service_detail values(0,'$desc',$row1[0])";
	
				if(mysqli_query($con,$sql2))
				{
					echo '<script>alert ("Inserted");</script>';
				} 
		}
?>