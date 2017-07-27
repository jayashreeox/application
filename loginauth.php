<?php

if (isset($_POST['login'])) {
    $db = mysqli_connect("localhost", "root", "admin@123", "phpDB");
    $uname = $_POST['userName'];
    $upwd = md5($_POST['pwd']);
    $mysql = "select * from cus_details where name='$uname' AND password='$upwd'";
    $result = mysqli_query($db, $mysql) or die("Error!!!");
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION["name"] = $uname;
        header('location:userinfo.php');
    } else {
        echo "wrong user &password";
    }
}
?>
