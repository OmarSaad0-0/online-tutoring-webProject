<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';

$sql="SELECT Course_Id, Course_Name FROM courses";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Course_Id"]. " - Name: " . $row["Course_Name"].  "<br>";
  }
}
*/?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width-device, initial scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        

        <link rel="stylesheet" type="text/css" href="admin1.css">
        <link rel="stylesheet" type="text/css" href="courses.css">
    </head>
    <body>
        <div class="container">
            
         <div class="navigation">
             <ul>
                 <li><li><a href="#">
                    <span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                    <span class="title"><h2>Proroz</h2></span>
                </a></li>
                <li><a href="courses.php">
                    <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <span class="title">Courses</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                    <span class="title">Messages</span>
                </a></li>
                <li><a href="Admins.php">
                    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span class="title">Admins</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i>
                    </span>
                    <span class="title">Sign Out</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                    
                    </span>
                    <span class="title">Orders</span>
                </a></li>
                <li><a href="#">
                    <span class="icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </span>
                    <span class="title">Students</span>
                </a></li>
             </ul>
             
         </div>
         <div class="main">
            
             <div class="topbar">
                 <div class="toggle" ></div>
                 
             </div>
            <div class="content">
            
            <table class="table">
          
  <tr>
    <th>course id</th>
    <th>course Name</th>
    <th>delete</th>
    <th>edit</th>
  </tr>
  <tr>
  <?php 
   while($row = $result->fetch_assoc()) {
    echo "<tr> <td>"  .$row["Course_Id"]."</td> <td>" . $row["Course_Name"].  "</td> <td><a href=deleteint.php?id=".$row["Course_Id"]."><button class='button1'>delete</button></td>
    <td><a href=editint.php?id=".$row["Course_Id"]."><button class='button button2'>edit</button></td> </tr>";
  }?>
  </tr>
</table>
                </div>
         </div>
        </div>

        


    </body>
</html>

