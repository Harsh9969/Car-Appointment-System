<?php session_start()?>

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

	
	</head>

 <script type="text/javascript">
        
            function pick()
            {
                
                 var mindate = document.getElementById("mindate").value;
               
                 document.getElementById("maxdate").setAttribute("min", mindate);
               
            }
               
        </script>


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
						
						<h2>DateWise Report</h2>
						</div>
						
						<!--<div class="row">-->
						<div class="col-md-12">
						
							<form method="post">
							 <div class="row">
							 <div class='col-md-4'>
								<div class="form-group">
									<div class='input-group date' >
										<input type='date' class="form-control" value="" id="mindate" name="mindate" onchange="pick() " min="" max="" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar" ></span>
										</span>
									</div>
								</div>
							</div>
							<div class='col-md-4'>
								<div class="form-group">
									<div class='input-group date'>
										<input type='date' class="form-control" value="" id="maxdate" name="maxdate" min="" max=""/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-md-4">
							<button type="submit" class="btn btn-info" name="submit" id="submit" >Generate Report</button>
							</div>
							</div>
							
							</form>
								
								 <?php 
								 include "db.php";
                                if(isset($_POST['submit']))
                                {
									 $mindate = $_POST['mindate'];
                                    $maxdate = $_POST['maxdate'];
								
									$sql = "select ow_name,date,time,s4.sname from appointment ap,image_s4 s4,service_master sm,appoinment_type ap1 where ap.aid=ap1.aid and ap1.sid=sm.smid and s4.sid=sm.sid and date between '$mindate' and '$maxdate' ";
                                    $res = mysqli_query($con,$sql);
									echo '<div id="HTMLtoPDF">';
									echo '<div class="table-responsive table-no-card m-b-30">
									<table class="table table-borderless table-striped table-earning">
											<tr>
												<th>Owner Name</th>
												<th>Date</th>
												<th>Time</th>
												<th>Service Name</th>
											</tr>';
									while($row=mysqli_fetch_array($res))
									{
										echo '<tr>
												<td>'.$row['ow_name'].'</td>
												<td>'.$row['date'].'</td>
												<td>'.$row['time'].'</td>
												<td>'.$row['sname'].'</td>
											</tr>';
									}
									echo "</table></div>";
									echo "</div>";
									echo '<button class="btn btn-warning"><a href="#" onclick="HTMLtoPDF()">Download PDF</a></button>';
								}
								?>
							
						</div>		
						
						<!--<div id="HTMLtoPDF">-->
						
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
	<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>
</body>

</html>
