<?php

if (isset($_POST['submit'])) {
    $db = mysqli_connect("localhost", "root", "admin@123", "phpDB");
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $sql = "insert into cus_details (name,password,email,mobile,dob,gender,address) values ('$name','$password','$email','$mobile','$dob','$gender','$address')";
    mysqli_query($db, $sql);
    header('location: login.php');
}


?>