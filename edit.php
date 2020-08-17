<?php 
include("connection.php");

if(isset($_POST['signUp'])){

  $id=$_GET['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $regno=$_POST['regno'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
 

  $sql="UPDATE student SET studentName=:name,studentEmail=:email,regNo=:regno,studentAddress=:address,studentPhone=:phone, WHERE studentId= :id";
  $pre = $conn->prepare($sql);
  $pre->execute(array(':name'=>$name,':email'=>$email,':regno'=>$regno,':address'=>$address,':phone'=>$phone,":id"=>$id));

  header("manage.php");
}

if($_GET['studentId']){
  $id=$_GET['studentId'];
    $sql = "SELECT * FROM student where studentId='$id'";
        $stmt = $pdo->query($sql);
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Page</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <style type="text/css">
    <title>SIGN UP PAGE</title>
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
    
  </style>
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
    <div class="col-lg-10" style="padding: 20px; background: lightpink;" >

      <center>
        <section id="signUp" style="background-color: lightgray; width: 35%;">

    <h3 style="font-size: 40px;" align="center">EDIT FORM</h3>
    <h4 style="font-size: 30px;" align="center">Welcome in our websites, join for free</h4>
    <div class="container-fluid">
        
    <form method="POST" action="manage.php" >
      <div class="form-group" >
          <input type="text" value="<?php echo  $results['studentName']; ?>" class="form-control" id="fname" placeholder="Name" name="name" required>
      </div>

      <div class="form-group">
          <input type="email" value="<?php echo  $results['studentEmail']; ?>" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>

      <div class="form-group">
         <input type="regnumber" value="<?php echo  $results['regNo']; ?>"class="form-control" id="regno" placeholder="Reg Number" name="regno" required>
      </div>

      <div class="form-group">
          <input type="phonenumber" class="form-control" value="<?php echo  $results['studentPhone']; ?>" id="pnumber" placeholder="Phone Number" name="phone" required>
      </div>

      <div class="form-group">
          <input type="text" class="form-control" id="address" value="<?php echo  $results['studentAddress']; ?>"placeholder="Address" name="address" required>
      </div>
      
      <input type="checkbox" name="english" required>I agree with terms and conditions<br><br>
      <button class="btn btn-success" name="signUp">Sign Up</button><br>

      Already have an account? <a href="log.php" style="color: purple">Log In</a>
    </form>
</center>
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

