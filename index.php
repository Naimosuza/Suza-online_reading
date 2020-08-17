<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			font-family: sans-serif;
		}
		.header{
			background-image: linear-gradient(to right, #a517ba, #5f1782); 
		}
		#nav-bar{
			position: sticky;
			top: 0;
			z-index: 10;
		}
		
		#navbarNav a{
			color:white;
			width: 100%;
			background-color: green;
			padding: 10px;
			margin-top: 3px
		}
		.navbar-brand img{
			height: 40px;
			padding-left: 20px;
		}
		
		.page-footer{background-image: linear-gradient(to right, #a517ba, #5f1782);height: 30px; text-align: center; width: 99.3%;}
	</style>
</head>
<body>
	<div class="container-fluid">
	<div class="row header" >
		
			<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand"><img src="img/123.png"></a>
			   <strong><b><h2 style="text-align: center;">SUZA ONLINE-READING</h2></b></strong>
				<div style="float: left;border:1x solid red"><a href="log.php">Log In</a></div>
		</nav>

		
	</div>
	<div class="row" style="height:600px">
		<div class="col-lg-2" style="background: lightgray; color: black; float: left;">
			<div class="" id="navbarNav">
					<a class="nav-link" href="index.php">HOME</a>
					<a class="nav-link" href="serve.php">SERVICES</a>
					<a class="nav-link" href="About.php">ABOUT US</a>
					<a class="nav-link" href="contactUs.php">CONTACT US</a>
					<a class="nav-link" href="logout.php">LOGOUT</a>			
		</div>
		</div>
		<div class="col-lg-10" style="padding: 20px; background: lightpink;">
			<div class="img">
				<img src="img/a6.jpg" width="100%;" height="500px"; margin-bottom: 20px;>
			</div>
			</div>

		
	</section>
		</div>
	</div>
	



	<div class="row">
		<div class="page-footer">
            <h5>© Copyright NayFat 2020|All Rights Reserved</h5>
     </div>
	</div>
</div>

</body>
</html>