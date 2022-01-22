<?php
session_start();
unset($_SESSION["userId"]);
unset($_SESSION["userEm"]);   
unset($_SESSION["userKind"]);         
unset($_SESSION["userFn"]);   

header("location: ../Login.php");
exit();