<?php session_start()?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="css/bootstrap.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<body>
    <div class="page-wrapper">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="well">
						
                            <a href="#">
                                <img src="images/logo1.jpg" style="width:40%;">
                            </a>
                        <div class="login-form">
							<table align="center">
                            <form action="" method="post">
								<tr>
								<td>
                                <div class="form-group">
                                    <label>Email Address</label>
								</td>
								<td>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </td>
								</tr>
								</div>
								<tr>
								<td>
                                <div class="form-group">
                                    <label>Password</label>
                                </td>
								<td>
									<input  type="password" class="form-control" name="password" placeholder="Password">
								</td>
								</tr>
								</div>
                                <tr>
								<td>
								</td>
								<td>
                                <button class="btn btn-warning btn-lg" type="submit" name="sub">sign in</button>
								</td>
								</tr>
                            </table>  
                            </form>
                           
                        </div>
                    </div>
					</div>
                </div>
            </div>
        </div>

    </div>
	
	
	<?php
	
		if(isset($_POST['sub']))
		{
			$user=$_POST['email'];
			$pass=$_POST['password'];
			if($user=="Admin@gmail.com" && $pass=="admin")
			{
				$_SESSION['em']=user;
				header('location:index.php');
				//echo '<script>window.location="index.php"</script>';
			}
			else
			{
				echo"invalid";
			}
		}
	if(isset($_GET['a']))
	{
		unset($_SESSION['em']);
		session_destroy();
	}
	?>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->