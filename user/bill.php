<?php session_start();?>
<!DOCTYPE html>
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
	<!--<script src="js/jquery.min.js"></script>-->
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
	
<script src="pdf/js/jquery-3.3.1.js"></script>
<script src="pdf/js/jquery.dataTables.min.js"></script>
<script src="pdf/js/dataTables.buttons.min.js"></script>
<script src="pdf/js/jszip.min.js"></script>
<script src="pdf/js/pdfmake.min.js"></script>
<script src="pdf/js/vfs_fonts.js"></script>
<script src="pdf/js/buttons.html5.min.js"></script>
<link href="pdf/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="pdf/css/buttons.dataTables.min.css" rel="stylesheet">
	<script>
		$(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
                ]
            } );
        } );
	
	
	</script>	
  </head>
  
  
  
<?php


		include "db.php";
		
		$aid=$_SESSION['aid'];
		//echo $aid;
		$sql="select ow_name,email,phone,car_make from appointment where aid=$aid";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$sql1="SELECT ap1.sid,sm.price,s4.sname FROM service_master sm , image_s4 s4, appoinment_type ap1
				where sm.smid=ap1.sid and s4.sid=sm.sid and ap1.aid=$aid";
		$res1=mysqli_query($con,$sql1);
		/*$sql2="SELECT ap.aid,sum(price) FROM `appointment` ap, image_s4 s4, appoinment_type ap1 where ap.aid=ap1.aid and s4.sid=ap1.sid GROUP BY AP.AID HAVING AP.AID=$aid";
		$res2=mysqli_query($con,$sql2);
		$row2=mysqli_fetch_array($res2);*/
		  
?>
<body>	

<div class="panel panel-default" style="margin-top:50px;height:auto;float:center;width:80%">

	<h2>Invoice</h3>
			  
				<a href="index.php" style="float:right"><img src="images/home.jpg" width=80px></a>	 
				
					<table class="table table-striped "align="center" id="example">
<thead>				
				<tr>
							<td><h3>Date:</h3></td>
							<td><?php echo $_SESSION['date']; ?></td>
						</tr>
</thead>
<tbody>				
						<tr>
							<td><h3>Name:</h3></td>
							<td><?php echo $row['ow_name'];?></td>
						</tr>
						<tr>
							<td><h3>Email:</h3></td>
							<td><?php echo $row['email'];?></td>
						</tr>
						<tr>
							<td><h3>Phone:</h3></td>
							<td><?php echo $row['phone'];?></td>
						</tr>
						<tr>
							<td><h3>Car Model:</h3></td>
							<td><?php echo $row['car_make'];?></td>
						</tr>
						<tr>
							<td><h3>Service type:</h3></td>
							
							<td>
								<table>
									<th>Service Name</th>
									<th>&nbsp &nbsp </th>
									<th>Price</th>
									
								<?php 
											$total=0;
											
											while($row1=mysqli_fetch_array($res1))
											{
												echo "<tr><td>".$row1['sname']."</td><td></td><td>".$row1['price']."</td></tr>";
												$total+=$row1[1];
											}
											echo "<tr><th>Total Price:</th><td></td><td>".$total."</td></tr>";
											
											
								?>
								</table>
							</td>
	</tbody>						
						</tr>
						
					</table>
			
			  		<br>
               
					
	</div>

	
    
	<!--<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>-->
</body>
</html>