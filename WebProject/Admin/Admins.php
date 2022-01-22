<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
require_once 'admin.html';
$sql="SELECT * FROM users WHERE Kind ='admin' ";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Course_Id"]. " - Name: " . $row["Course_Name"].  "<br>";
  }
}
*/?>
 <div class="main">
            
                 
            <div class="content">
              
<table class = "table table-striped">
  <tr>
    <th>First Name</th>
    <th>Email</th>
    <th>delete</th>
    
  </tr>
  <tr>
  <?php
   while($row =  mysqli_fetch_assoc($result)) {
    echo "<tr> <td>"  .$row["userFn"]."</td> <td>" . $row["userEm"].  "</td> <td><a href=Admin_Delete.int.php?id=".$row["userId"]."><button class='button button1'>delete</button></td></tr>";
  }?>
  </tr>
</table>
<a href="Add_Admin.int.php">
<button class="button">Add Admin</button>
</a>
</div>
</div>