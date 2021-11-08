<?php session_start();?>
<!doctype html>
<html>

	<?php

include "db.php";
//edit 
if(isset($_GET["e"]))
{
 
 $pid=$_GET["e"];
 $sql="select * from products where pid='$pid'";
 $res=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($res);
 
}

//update

if(isset($_POST["upd"]))
{
	
	$pname=$_POST["name"];
	$price=$_POST["price"];
	
		$sql="update products set pname='$pname',price='$price'where pid='$pid' ";
		$rs=mysqli_query($con,$sql);
		if($rs)
			header ('Location:product.php');
		else
			echo "Record is not updated due to some error";
	
	//$row=mysqli_fetch_array($rs);
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

						
							<form action="" method="post" class="form-conatiner" enctype="multipart/form-data">
							<table style="margin:0px auto;">
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<!--<span class="input-group-text bg-transparent bt-0 bl-0 br-0 no-radius text-black"><i class="ti-user"></i></span>-->
											
											<tr>
												<td><label>Image</label></td>
												<td><input type="file" name="image" value="<?php echo $img;?>"><img src="<?php echo $row[1];?>" width=50px></td>
											</tr>

											<tr>
												<td>Product Name</td>
												<td><input type="text" name="name" value="<?php echo $row[2];?>"></td>
											</tr>

											<tr>
												<td>Product Price</td>
												<td><input type="number" name="price" value="<?php echo $row[3];?>" > </td>
											</tr>
											<tr>
											<td></td>
											
											<button type="submit" class="btn btn-info btn-lg margin-top-10" name="upd">update</button></td>
											</tr>
										</div>
									</div>
									 
								</div>
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