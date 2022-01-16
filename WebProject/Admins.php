<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$sql="SELECT * FROM users WHERE userKind ='admin'";
$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["Course_Id"]. " - Name: " . $row["Course_Name"].  "<br>";
  }
}
*/?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<table>
  <tr>
    <th>First Name</th>
    <th>Email</th>
    <th>delete</th>
    
  </tr>
  <tr>
  <?php
   while($row =  mysqli_fetch_assoc($result)) {
    echo "<tr> <td>"  .$row["userFn"]."</td> <td>" . $row["userEm"].  "</td> <td><a href=admindelete.php?id=".$row["userId"]."><button class='button button1'>delete</button></td></tr>";
  }?>
  </tr>
</table>
<a href="AddAdmin.php">
<button class="button">Add Admin</button>
</a>