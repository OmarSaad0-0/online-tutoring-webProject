<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$fname=$_POST["fName"];
$lname=$_POST["lName"];
$password=$_POST["password"];
$email=$_POST["Email"];
//$usercourse=$_POST["course"];
$sql="INSERT INTO users (userFn,userLn,userEm,userPassword,userKind)	
 VALUES ('$fname','$lname','$email','$password','admin')";
 if($conn->query($sql)===true){
	 echo" succesfully";
	 
 }
 else{
	 "error".$sql."<br>".$conn->error;
	 
 }	
