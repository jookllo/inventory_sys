<?php

include "../conn.php";

if(isset($_POST['adduser'])) {

    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $utype = $_POST['utype'];

    $password=md5($pass);

    $sql = "INSERT INTO users  (uname, email,pass,utype) VALUES ('$uname', '$email','$password','$utype')";

    if (mysqli_query($link, $sql)) {
        echo "<script> alert('Records Added Successfully')</script>";
        header("Location: ../admin/index.php");
        die();
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        die();
    }}



?>