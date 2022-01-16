<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$query="UPDATE courses SET Course_Name=\"".$_POST["CourseName"]."\", Course_Price=\"".$_POST["Price"]."\"WHERE Course_Id=".$_POST["id"];
$results=$conn->query($query);

if(!$results){
	die("error ");
}
else
	echo"DONE!";