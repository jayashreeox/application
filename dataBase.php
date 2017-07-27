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
    $photo="images/";
    $profile=$photo.$_FILES['profile']['name'];
    move_uploaded_file($_FILES['profile']['tmp_name'], $photo . $_FILES['profile']['name']);
    $sql = "insert into cus_details (name,password,email,mobile,dob,gender,address,profile) values ('$name','$password','$email','$mobile','$dob','$gender','$address','$profile')";
    mysqli_query($db, $sql);
    header('location: login.php');
}


?>