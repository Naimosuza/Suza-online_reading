<?php  
session_start();
include "connection.php";
if (isset($_POST["signUp"])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$regno=$_POST['regno'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	$st=$pdo->prepare($sql1);
	$st->execute(array(':user'=>$email,':pass'=>$pas,':role'=>$role));
	$uID=$pdo->lastInsertId();
    
	$role='student';$pas='12345';
		$sql1="UPDATE login set name=:name,password=:password,role=:role where studentId=:Id ";
	$stmt=$result->execute(array(':name'=>$name,':email'=>$email,':regno'=>$regno,':phone'=>$phone,':address'=>$address,':uid'=>$uID));
	$_SESSION ['Success']="ALREADY REGISTER LOGIN NOW";
	header("location:manage.php");
	echo "string";
}


?>