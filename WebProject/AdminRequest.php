<?php
require_once 'Internal\dbConn.int.php';
require_once 'Internal\Functions.int.php';
$sql="SELECT * FROM request";
$result = $conn->query($sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<table >
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
   echo "<tr> <td>"  .$row["Course_Name"]."</td> <td>" . $row["Course_Link"].  "</td> <td>".$row["Offered_By"]."</td><td>".$row["Price"]."</td><td><a href=admit.php?id=".$row["Course_Id"]."><button class='button button2'>Admit</button></td></tr>";
 }?>
 </tr>
</table>

