<form class="form-horizontal" method="post" action="">

	<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control"  name="name" placeholder="First & Last Name" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-10">
			<input type="email" class="form-control"  name="email" placeholder="example@domain.com" value="" required>
		</div>
	</div>
	<div class="form-group">
		<label for="message" class="col-sm-2 control-label">Message</label>
		<div class="col-sm-10">
			<textarea class="form-control" rows="4" name="message" required></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
		</div>
	</div>
</form>

<?php 
	include "db.php";
	if(isset($_POST['submit']))
	{
		$nm=$_POST['name'];
		$em=$_POST['email'];
		$mess=$_POST['message'];
		$sql="insert into feedback values(0,'$nm','$em','$mess')";
		$res=mysqli_query($con,$sql);
		if($res==0)
		{
			echo '<script>alert("Inserted");</script>';
		}
	}
?>