<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$courseName=$_POST['Cname'];
$courseLink=$_POST['Clink'];
$coursePhoto=$_POST['Cphoto'];
$offeredBy=$_POST['Oby'];
$price=$_POST['Cprice'];
$sql="INSERT INTO request (Course_Name,Course_Link,Course_Photo,Offered_By,Price)
VALUES ('$courseName','$courseLink','$coursePhoto','$offeredBy','$price')";
if($conn->query($sql)===true){
    echo" succesfully";
    
}
else{
    "error".$sql."<br>".$conn->error;
    
}	
