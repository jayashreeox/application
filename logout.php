<?php
session_start();
echo"you are logged out";
session_destroy();
header('location:login.php');

?>
