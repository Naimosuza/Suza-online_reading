<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
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
		.navbar{
			
			padding: 0;
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
		<section id="nav-bar">
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand"><img src="img/123.png"></a>

			<div class="navbar-header">
            <b><h1 style="text-align: center;">SUZA ONLINE-READING</h1></b>
                       
		</nav>
	</section>
	</div>
	<div class="row" style="height:900px">
		<div class="col-lg-2" style="background: lightgray; color: black; float: left;">
			<div class="" id="navbarNav">
					<a class="nav-link" href="index.php">HOME</a>
					<a class="nav-link" href="serve.php">SERVICES</a>
					<a class="nav-link" href="About.php">ABOUT US</a>
					<a class="nav-link" href="contactUs.php">CONTACT US</a>
					<a class="nav-link" href="logout.php">LOGOUT</a>			
		</div>
		</div>
		<div class="col-lg-10" style="padding: 20px; background: lightpink;" >

			<center>
					<section id="firstP" >
		<h2 style="text-align: center;">LET'S START READING NOW</h2>
	<h3 style="text-align: center;">Available Courses</h3>
	<div class="row">
				<div class="col-md-4 courses">
					<img src="img/account.jfif" class="service-img">
					<h4>ACCOUNTING</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="account.php">Account</a>

				</div>
				<div class="col-md-4 courses">
					<img src="img/web.jfif" class="service-img">
					<h4>WEB</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="web.php">Web</a>

				</div>
				<div class="col-md-4 courses">
					<img src="img/database.jfif" class="service-img">
					<h4>NETWORK</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="network.php">Network</a>
				</div>
				</div>

				<div class="row">
				<div class="col-md-4 courses">
					<img src="img/account.jfif" class="service-img">
					<h4>PC MAINTANANCE</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="maintain.php">Pc Maintanance</a>

				</div>
				<div class="col-md-4 courses">
					<img src="img/and.jfif" class="service-img">
					<h4>ANDROID</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="android.php">Android</a>

				</div>
				<div class="col-md-4 courses">
					<img src="img/math.jfif" class="service-img">
					<h4>CALCULAS</h4>
					<p>Here the students will have a good and easily way to get their learning material. So that they can maintain their studies well without any disturbance </p>
					<a href="Calculas.php">Database</a>
				</div>
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