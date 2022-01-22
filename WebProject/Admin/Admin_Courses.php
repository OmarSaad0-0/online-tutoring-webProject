<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
require_once 'admin.html';


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
 
         <div class="main">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                 
            <div class="content">
            
            <table class = "table table-striped">
          
  <tr>
    <th>course id</th>
    <th>course Name</th>
    <th>delete</th>
    <th>edit</th>
  </tr>
  <tr>
  <?php 
   while($row = $result->fetch_assoc()) {
    echo "<tr> <td>"  .$row["Course_Id"]."</td> <td>" . $row["Course_Name"].  "</td> <td><a href=Delete_Course.int.php?id=".$row["Course_Id"]."><button class='button1'>delete</button></td>
    <td><a href=Edit_Course.int.php?id=".$row["Course_Id"]."><button class='button button2'>edit</button></td> </tr>";
  }?>
  </tr>
</table>
                </div>
         </div>
        </div>

        


    </body>
</html>

