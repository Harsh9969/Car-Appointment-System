<?php session_start()?>
<?php
include "db.php";
	//$id=$row[0];
	$sql="select * from appointment";
	$res=mysqli_query($con,$sql);
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
	<script src="js/jquery.js"></script>
	
	
	

	<script>
$(document).ready(function()
{
	
	$(".car").change(function()
	{
		var dataString = 'StateName='+ $(this).val();
		$.ajax
		({
			type: "POST",
			url: "ajaxreport.php",
			data: dataString,
			cache: false,
			success: function(html)
			{
				$(".state").html(html);
			} 
		});

	});

});
</script>
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
            <!-- header area start -->
            <?php include('header.php');?>
            <!-- header area end -->
			
				<div class="row">
						<div class="col-md-12">
						
						<h2>Customer report</h2>
						</div>
						
						<!--<div class="row">-->
						<div class="col-md-12">
						
							<div class="table-responsive table-no-card m-b-30"><br>
                             <form method="post">
							 <table style="margin:0px auto;"> 



						<tr>
							<td>Owner Name</td>
							<td><select name="sid" class="car" ><?php
							
							while($row=mysqli_fetch_array($res))
							{
								echo "<option value='$row[ow_name]'>$row[1]</option>";
							}
							?></select></td>
							
						</tr>
						
							</table>
							</form>
                            </div>
						</div>		
						
						<!--<div id="HTMLtoPDF">-->
						<div class="col-md-12">
							<div class="table-responsive table-no-card m-b-30"><br>
							<table>
								
								<tr>
								<td><span class="state"></span></td>
								
								</tr>
							</table>
							</div>
						</div>
				<!--</div>-->
				</div>
				
        </div>
		<!-- main content area end -->
    </div>
     <!-- page container area end -->          
               
   
                    
               
        
        

		
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>

  
    
    <!-- all line chart activation -->
    <script src="js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</body>

</html>
