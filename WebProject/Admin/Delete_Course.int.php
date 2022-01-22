<?php

require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
$query="DELETE FROM courses WHERE Course_Id=".$_GET['id'];
$results=$conn->query($query);
if(!$results)
{
   die("error in the query");
}
else
{
   echo "<script> alert('..the course deleted')</script>";
   header("Location: ../Webproject/admin.html");
}