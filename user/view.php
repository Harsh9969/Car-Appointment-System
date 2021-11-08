<?php
	include "db.php";
	if(isset($_GET['a']))
	{
		$a=$_GET['a'];
	}
	$sql="select * from service_detail where sid = 7";
	//$sql="select * from service_detail sd inner join image_s4 im on sd.sid=im.sid where servicedet_id = $a";
$res=mysqli_query($con,$sql);										
?>

<html>
<body>
<head>
  
  
  
    <title>AutoCare</title>
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
	<link href="css/bootstrap.css" rel="stylesheet" media="all">
    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	 
	
  </head>
<a href=""class="nav-link"  data-toggle="modal" data-target="#1"><button>view</button></a>
<div class="modal fade" id="1"  role="dialog" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body">
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button><br>
				<form method="post">
					<h1 align=center>Details</h1><br><br><br><br>
					<ul>
						<li>Service Id</li>
						<?php
						
						while($row=mysqli_fetch_array($res))
						{
							echo "<li>". $row['description']."</li>";
						}
						
						?>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- loader -->
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