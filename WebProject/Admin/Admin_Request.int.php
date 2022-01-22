<?php
require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';
require_once 'admin.html';
$sql="SELECT * FROM request";
$result = $conn->query($sql);
?>
<div class="main">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="admin1.css">
                 
            <div class="content">
<table class="table table-striped" >
 <tr>
   <th>course Name</th>
   <th>Link</th>
   <th>Oferred by</th>
   <th>Price</th>
   <th>operation</th>

   
 </tr>
 <tr>
 <?php
  while($row = $result->fetch_assoc()) {
   echo "<tr> <td>"  .$row["Course_Name"]."</td> <td>" . $row["Course_Link"].  "</td> <td>".$row["Offered_By"]."</td><td>".$row["Price"]."</td><td><a href=Admit.int.php?id=".$row["Course_Id"]."><button class='button button2'>Admit</button></td></tr>";
 }?>
 </tr>
</table>
</div>
</div>
