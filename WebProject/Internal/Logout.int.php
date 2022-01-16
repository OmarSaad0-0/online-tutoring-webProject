<?php

session_start();
unset($_SESSION["userId"]);
unset($_SESSION["userEm"]);              

header("location: ../index.php");
exit();