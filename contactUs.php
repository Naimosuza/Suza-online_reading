<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Page</title>
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
            </div>
           
		</nav>
	</section>
	</div>
	<div class="row" style="height:540px">
		<div class="col-lg-2" style="background: lightgray; color: black; float: left; height: 540px">
			<div class="" id="navbarNav">
					<a class="nav-link" href="index.php">HOME</a>
					<a class="nav-link" href="serve.php">SERVICES</a>
					<a class="nav-link" href="About.php">ABOUT US</a>
					<a class="nav-link" href="contactUs.php">CONTACT US</a>
					<a class="nav-link" href="logout.php">LOGOUT</a>			
		</div>
		</div>
		<div class="col-lg-10" style="padding: 20px; background: lightpink; height: 540px;" >
			
			<section id="contactUs">
		<div class="container">
			<h2 class="heading" style="text-align: center;"><b>CONTACT US</b></h2>
			<h2 style="text-align: center;">We do love to help</h2>
			<h3 style="text-align: center;">We like to create things which is best for you, warmly welcome </h3><br><br>

			<div class="row">

			<div class="col-md-6">

				<form>
				
				<input type="text" name="text" class="form-control" placeholder="Your Name" required="">
				<br>
				<input type="text1" name="text1" class="form-control" placeholder="Your Email" required="">
				<br>
				<textarea class="form-control" rows="5" placeholder="Message" required=""></textarea><br>

				<center>
					<button class="btn btn-info">Submit</button>
				</center>
				</form>
			</div>

				<div class="col-md-1"></div>

			<div class="col-md-5">
		<i><b>Location:</b></i><h4>Suza Tunguu, street: Getini</h4>
		<b><i>Phone:</i></b><h4>0658 267 989/ 0779 223 450</h4>
		<b><i>Email:</i></b><h4>nailamwadini7@gmai.com</h4>
	</div>
	</div>



	</div>
	</section>

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