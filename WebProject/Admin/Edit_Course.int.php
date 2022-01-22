<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<form method="Post" action="Apply_Edit.int.php">
<div class="form-group">
<?php

require_once 'C:\xampp\htdocs\WebProject\Internal\dbConn.int.php';
require_once 'C:\xampp\htdocs\WebProject\Internal\Functions.int.php';

$query="SELECT * FROM courses WHERE Course_Id=".$_GET["id"];
$results=$conn->query($query);
if(!$results){die("error in the query");}
while($row=$results->fetch_array(MYSQLI_ASSOC)){
    echo "<input type=hidden name=id value=".$row["Course_Id"]."><br>";
	echo "<input type=text name=CourseName value=".$row["Course_Name"]."><br>";
	echo "<input type=text name=Price value=\"".$row["Course_Price"]."\"><br>";
	echo "<input type=text name=OfferedBy value=\"".$row["Course_Offered_By"]."\"><br>";
}
?>
</div>
<input type=submit>
