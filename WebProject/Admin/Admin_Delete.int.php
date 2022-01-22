<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
$query="DELETE  FROM users WHERE userId=".$_GET['id'];
$results=$conn->query($query);
if(!$results){die("error in the query");}
else{
   echo " <script> alert('..the admin  deleted')</script>";
   header("location: ../Admin/admin.html");
}