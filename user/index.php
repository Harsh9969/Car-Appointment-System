<?php session_start();?>
<!DOCTYPE html>
<?php
		
		
		
		if(isset($_POST["btn1"]))
		{
			include "db.php";
			echo $_POST['ph'];
			//exit;
			$on=$_POST['oname'];
			$_SESSION['date']=$date=$_POST["date"];
			$time=$_POST['time'];
			$carno=$_POST['carno'];
			$cm=$_POST['car'];
			$ph=$_POST['ph'];
			$email=$_SESSION['login_user'];
			$check=$_POST['chk'];
			//$type=implode(",",$check);
			//$sub="Booked";
		
			
		$sql="insert into appointment values(0,'$on','$date','$time','$carno','$cm','$ph','$email')";
		//echo $sql;
			if(mysqli_query($con,$sql) or die(mysql_error()))
			{
			//echo '<script>alert("Success Inserted");</script>';
			$aid=mysqli_insert_id($con);
			$_SESSION['aid']=$aid;
			}
			
			 foreach ($check as $c)
			{
				$sql2="insert into appoinment_type values('$aid','$c')";
				//echo $sql2;
				mysqli_query($con,$sql2);
			
				// if(mysqli_query($con,$sql2))
			//	{
				//	echo '<script>alert("Booked");</script>';
				//}
				header("Location:bill.php");  
			}
			/*$sql1="select email from appointment where ";
			$res1=mysqli_query($con,$sql1);
			while($row1=mysqli_fetch_array($res1))
			{
				
			}
			$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
</body>
</html>";
 $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   if (mail($email, $sub, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }*/
		}
		

		
	?>

	


<html lang="en">
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

   <!-- <link href="css/bootstrap.css" rel="stylesheet" media="all">-->

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	    <script src="js\jquery.js"></script>
	 
	<script>
$(document).ready(function()
{
	
	$(".car").change(function()
	{
		var dataString = 'StateName='+ $(this).val();
		$.ajax
		({
			type: "POST",
			url: "ajaxcm.php",
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
<script type="text/javascript">
			
		function setmin()
        {
		
		    var d = new Date();
			var m1=d.getMonth()+parseInt("1");
			var m="0"+m1;
			var d1= d.getFullYear()+"-"+m+"-0"+d.getDate();
		    document.getElementById("appdate").setAttribute('min', d1);
		    
		}
		
		
		</script>

  </head>
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200" onload="setmin()">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand"><img src="images/logo1.jpg" style="height:55px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
         
        </button>

        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
			<li class="nav-item"><a href="#section-menu" class="nav-link">Services </a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
		<?php
			if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user']))
				{
				?>
					<li class="nav-item"><a href="mybooking.php" class="nav-link">My Booking</a></li>
					<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
				<?php
				}
				else
				{
					
		 ?>		<li class="nav-item"><a href="" target="_blank" class="nav-link"  data-toggle="modal" data-target="#login">Login</a></li>
		 <?php
				}
				
				?>
			 
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/main.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate mb-3"  style="color:#FFA07A">Welcome To AutoCare</h1>
            <h2 class="h5 site-subheading mb-5 site-animate" style="color:#7CFC00">A Dream without ambition is like car without gas... you're not going anywhere</h2> <br><br><br><br><br><br><br>	<br><br>
           <?php
				if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user']))
				{
		   
					echo'<p><a href="" target="_blank" class="btn btn-outline-white btn-lg site-animate" style="color:#7CFC00" data-toggle="modal" data-target="#reservationModal"><font size=4><b>Book Appointment</b></font></a></p>';
				}
			?>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 site-animate mb-5">
            <h4 class="site-sub-title">Our Story</h4>
            <h2 class="site-primary-title display-4">Welcome</h2>
            <p></p>

            <p class="mb-4">
				The best way to find yourself is to lose yourself in the service of others. ...<br><br>
					To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity. ...<br><br>
				Everyone has a purpose in life and a unique talent to give to others.
			</p>
          </div>
          
          <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
            <img src="images/bikem.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

  <!-- Services Section Start-->

    <section class="site-section" id="section-menu">
    <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Service Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">A Dream without ambition is like car without gas... you're not going anywhere</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">

           
					 
		<?php
		 include "db.php";
		 $sql="select * from image_s4";
		 $res=mysqli_query($con,$sql);
		 while($row=mysqli_fetch_array($res))
		 {
			$id=$row['sid'];
			
		echo '				
                <div class="tab-content text-left">
				<div class="row">
					<div class="col-md-3 site-animate">
						<h5>'.$row['sname'].'</h5>
					</div>
					<div class="col-md-3 site-animate">
						<a href=""><img src="'.$row['image'].'"/></a>
					</div>
					<div class="col-md-3 site-animate">
						<p>'.$row['intro'].'</p>
					</div>
					<div class="col-md-3 site-animate">';
					echo "
						 <button class='btn btn-info'><a href='#v' data-toggle='modal' data-id=$row[0]>Details</a></button>
	
				</div>
               
					";
				
				}
				
				

		?>
             
                    
            </div>
           </div>
              
        </div> 
    </div>
    </section>
    <!-- Services END section -->    
	

	<!--Details-->

	<!--view details-->
	<script>
  $(document).ready(function(){
    $('#v').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'test1.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('#1').html(data);//Show fetched data from database
            }
        });
     });
});

</script>
	
	
	
	<div class="modal fade" id="v"  role="dialog" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body">
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button><br>
				<form method="post">
					<h1 align=center>Details</h1><br>
					 
						<span id="1"> </span>
				</form>
			</div>
		</div>
	</div>
</div>
	
	

	
        

	
	<!--Gallery Secton Strat-->
    <section class="site-section" id="section-gallery">
      <div class="container">
        <div class="row site-custom-gutters">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">A Dream without ambition is like car without gas... you're not going anywhere</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/b1.jpg" class="site-thumbnail image-popup">
              <img src="images/b1.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=650px>
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/b2.jpg" class="site-thumbnail image-popup">
              <img src="images/b2.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=650px>
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/b3.jpg" class="site-thumbnail image-popup">
              <img src="images/b3.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=650px>
            </a>
          </div>

          <div class="col-md-4 site-animate">
            <a href="images/c1.jpg" class="site-thumbnail image-popup">
              <img src="images/c1.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=500px>
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/c2.jpg" class="site-thumbnail image-popup">
              <img src="images/c2.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=500px>
            </a>
          </div>
          <div class="col-md-4 site-animate">
            <a href="images/c3.jpg" class="site-thumbnail image-popup">
              <img src="images/c3.jpg" alt="Free Template by colorlib.com" class="img-fluid" style="height:300px" width=500px>
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Contact</h2>
            <div class="row justify-content-center">
              `<div class="col-md-7">
                <p class="lead">A Dream without ambition is like car without gas... you're not going anywhere</p>			
				</div>	
			</div>
            </div>
          </div>

          <div class="row">
		  <div class="col-md-4"></div>
          <div class="col-md-4 site-animate text-center">
            
            <p class="text-black">
              Address: <br> Near,Big Bazar <br> A.V.Road,Anand<br><br>
              Phone: <br> 787 453 93 06 <br> <br>
              Email: <br> <a href="">AutoCareService.com</a>
            </p>
		</div>
		  <div class="col-md-4">
			<?php include ("feedback.php");?>
		  </div>
		</div> 
		<br><br>
		 <div class="row">
           <div class="col-md-12 text-center" >
            <div class="site-footer-widget mb-4">
			
              <ul class="site-footer-social list-unstyled ">
                <li><a href=""><span class="icon-twitter"></span></a></li>
                <li><a href=""><span class="icon-facebook"></span></a></li>
                <li><a href=""><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
         </div>
        </div>
      
    </section>
   
    <!-- END section -->
    

   
    <!--Login-->
	<div class="modal fade" id="login"  role="dialog" aria-labelledby="login" aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body">
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button><br>
				<form action="login_run.php" method="POST">
				<div class="row">
			     <div class="col-md-12 form-group">
                      <label>Username</label>
                      <input type="email" class="form-control" name="uname" placeholder="Username" required>
                    </div>
				</div>
				<div class="row">
                    <div class="col-md-12 form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="pwd" placeholder="Password"  required>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12 form-group">
                      <a href="registration.php">Register</a>
                    </div>
				</div>
				
				<div class="row">
				<div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block"  value="Submit" name="btnlog">
                    </div>
				</div>
				</form>
		  </div>
		</div>
	  </div>
	</div>
	
	
	
	<!--End--> 


    

    <!-- Modal-->
	<div class="modal fade" id="reservationModal"  role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
			<div class="modal-body">
				<div class="row">
				  <div class="col-lg-12">
					<div class="bg-image" style="background-image: url(images/book.jpg);"></div>
				  </div>
					<div class="col-lg-12 p-5">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <small>CLOSE </small><span aria-hidden="true">&times;</span>
						</button>
							<h1 class="mb-4">Service Booking</h1>  
								<form action="" method="post" >
									<div class="row">
										<div class="col-md-4 form-group">
										  <label>Owner Name</label>
										  <input type="text" class="form-control" placeholder="Full name" name="oname" required>
										</div>
										
										<div class="col-md-4 form-group">
										  <label>Phone No.</label>
										  <input type="text" class="form-control" name="ph" placeholder="Mobile no" pattern="[0-9]{10}" required>
										</div>
										<div class="col-md-4 form-group">
										  <label>Car make</label>
										   <select name="car" class="car"><?php
												include "db.php";
												$sql="select * from car_make";
												$res=mysqli_query($con,$sql);
													echo "<option>--Select car make--</option>";
													while($row=mysqli_fetch_array($res))
													{
														
														echo "<option value='".$row['cmake']."'>".$row['cmake']."</option>";
													}
								
											?></select>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-4 form-group" >
										  <label>Date</label>
										  <input type="date" class="form-control" name="date" id="appdate" required>
										  
										</div>
										<div class="col-md-4 form-group">
										  <label>Time</label>
										  <input type="time" class="form-control" name="time" required>
										</div>
									
										<div class="col-md-4 form-group">
										  <label>Car No.</label>
										   <input type="text" class="form-control" placeholder="Car no." name="carno" pattern="^([A-Z]{2}-?[0-9]{2}-?[A-Z]{2}-?[0-9]{4})$" required>
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-md-6 form-group">
										  <label>Service_Type</label><br>
										  <span class="state"></span>
										 										
										</div>
										
									</div>
									
									<div class="row">
										<div class="col-md-12 form-group">
										  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" name="btn1">
										
										</div>
									</div>
								</form>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>
	
	
	
	
    <!-- END Modal -->
	

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

