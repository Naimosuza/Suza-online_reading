<?php
include("connection.php");
session_start();

if ( isset($_GET['studentId']) ){
	$id= $_GET['studentId'];
    $sql = "DELETE FROM student WHERE studentId = '$id'";
    $stmt = $pdo->query($sql);
    $_SESSION['success'] = 'Record deleted';
    header('Location:manage.php');
  
}
