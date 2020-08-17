<!DOCTYPE html>
<html>
<head>
	<title>Manage Course</title>
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

		</nav>
	</section>
	</div>
	<div class="row" style="height:600px">
		<div class="col-lg-2" style="background: lightgray; color: black; float: left;">
			<div class="" id="navbarNav">
					<a class="nav-link" href="home_admin.php">HOME</a>
					<a class="nav-link" href="course.php">COURSE</a>
					<a class="nav-link" href="students.php">STUDENTS</a>
					<a class="nav-link" href="profile.php">PROFILE</a>

					<a class="nav-link" href="logout.php">LOGOUT</a>			
		</div>
		</div>
		<div class="col-lg-10" style="padding: 20px">
			<div class="">
						<h2 style="text-align:;">Admin Management Courses</h2>

			</div>
			<p>Select Course</p>
			<hr>
				<section id="management admin" style="border:1px solid lightgray">



			<!-- <a href="addCourse.php" class="btn btn-info" name="addCourse" role="button" style="float: right;"> Add Course</a><br><br> -->
		

		<div class="table-responsive">
			<table class="table">
				<a href="account.php">Account Course</a><br>
				<a href="network.php">Network Course</a><br>
				<a href="web.php">Web Course</a><br>
				<a href="pc maintainance.php">Pc Mintanance Course</a><br>
				<a href="android.php">Android Course</a>
				<a href="Calculas.php">Calculas Course</a>
			</table>
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