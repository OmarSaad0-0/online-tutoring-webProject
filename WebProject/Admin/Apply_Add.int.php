<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
$fname=$_POST["fName"];
$lname=$_POST["lName"];
$password=$_POST["password"];
$email=$_POST["Email"];

$hashedPass=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users (userFn,userLn,userEm,userPassword,kind)	
 VALUES ('$fname','$lname','$email','$hashedPass','admin')";
 if($conn->query($sql)===true){
	 echo" succesfully";
	 echo"<script>alert('you have added admin succeffully')</script>";
	 header("location: ../Admin/admin.html");
 }
 else{
	 "error".$sql."<br>".$conn->error;
	 
 }	

 