<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form name="addAdmin" onsubmit="return validateForm()" method="POST" action="Apply_Add.int.php">
    <div class="form-group">
 First name : <input type="text" name="fName"><br>
 Last name : <input type="text" name="lName"><br>
 password : <input type="password" name="password"><br>
 Email :    <input type="text" name="Email"><br>
</div>
<input type="submit" class="btn btn-primary">
</form>
<script>
    function validateForm() {
  let x = document.forms["addAdmin"]["fName"].value;
  let y = document.forms["addAdmin"]["lName"].value;
  let z = document.forms["addAdmin"]["password"].value;
  let g = document.forms["addAdmin"]["Email"].value;
  if (x == "" || y == ""|| z == "" || g == "") {
    alert("All Data must be filled out");
    return false;
  }
}
</script>