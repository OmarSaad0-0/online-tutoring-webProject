<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
$sql="SELECT * FROM request WHERE Course_Id=".$_GET['id'];
$result = $conn->query($sql);
if($conn->query($sql)==true){
    echo" succesfully";
    $row = $result->fetch_assoc();
    $courseName=$row["Course_Name"];
    $CourseLink=$row["Course_Link"];
    $coursePhoto=$row["Course_Photo"];
    $OfferedBy=$row["Offered_By"];
    $price=$row["Price"];
}
else{
    "error".$sql."<br>".$conn->error;
    
}	
$sql2="INSERT INTO courses (Course_Name,Course_Image,Course_Offered_By,Course_Price)
VALUES ('$courseName','$coursePhoto','$OfferedBy','$price')";
if($conn->query($sql2)==true){
    echo" succesfully";
    
}
else{
    "error".$sql2."<br>".$conn->error;
    
}	
?>