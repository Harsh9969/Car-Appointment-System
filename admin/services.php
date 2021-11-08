<?php session_start()?>
<?php
//delete
if(isset($_GET["d"]))
{
 include "db.php";
 $pid=$_GET["d"];
$sql1="delete from service_detail where sid='$pid'";
 mysqli_query($con,$sql1);
 $sql="delete from image_s4 where sid='$pid'";
 $ans=mysqli_query($con,$sql);
 //echo intval($ans);
 
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
	<script>
		window.location.hash="no-back-button";
		window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
		window.onhashchange=function(){window.location.hash="no-back-button";}
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
						
						<h2>Services</h2>
						</div>
						
						<!--<div class="row">-->
						<div class="col-md-12">
						<a href='image.php'><button class='btn btn-info '><i class='ti-shopping-cart'> Add Services</i></button></a>
						
							<div class="table-responsive table-no-card m-b-30"><br>
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
												<th>Image</th>
                                                <th>Description</th>												
																						
                                            </tr>
                                        </thead>
                                    <tbody>
									<tr>
									<?php
									include "db.php";
										$sql="select * from image_s4";
											$res=mysqli_query($con,$sql);
											
											while($row=mysqli_fetch_array($res))
												
											{
												echo "<tr>";
												$pid=$row[0];
												echo "<td>".$row["sname"]."</td>";
												echo "<td>".'<img src="'.$row['image'].'" width=50px/>'."</td>";
												echo "<td>".$row["intro"]."</td>";	
													
												echo "<td><a href='image_update.php?e=$pid'><button class='btn btn-info'><i class='ti-pencil'></i></button></a> </td>";
												echo "<td> <a href='?d=$pid'><button class='btn btn-info'><i class='ti-trash'></i></button></a></td>";
												
												echo "</tr>";
											}
										?>			
                                           </tr>
										   
                                        </tbody>
                                    </table>
									
                            </div>
						</div>
						
							
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
</body>

</html>




