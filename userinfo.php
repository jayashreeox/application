<?php
session_start();
$name = $_SESSION['name'];

if($name)
{
    echo "authenticated user";
    echo "<a href='logout.php'>Logout </a>";
}
 else {
  header("location:login.php");   
 }

?>


