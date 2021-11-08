<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <script src="js\jquery.js"></script>

    
</head>
<body>
<?php
 include "db.php";
//Include database connection
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want

		
		 $sql="select * from service_detail where sid=".$id;
		 $res=mysqli_query($con,$sql);
		// $sql1="select price from image_s4  where sid=".$id;
		 //$res1=mysqli_query($con,$sql1);

		 echo "<ul>";
		 while($row=mysqli_fetch_array($res))
		 {
			echo "<li>$row[1]</li>";
		 }			
		echo "</ul>";
		/* echo "<br>";
		 while($row1=mysqli_fetch_array($res1))
		 {
			echo "$row1[0]";
		 }		 */	

 }
?>
</body>

</html>