<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$query="DELETE  FROM users WHERE userId=".$_GET['id'];
$results=$conn->query($query);
if(!$results){die("error in the query");}
else{
   echo " <script> alert('..the admin  deleted')</script>";
   header("location: ../admin.html");
}