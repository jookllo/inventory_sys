<?php
require_once("conn.php");
session_start();
$data = $_POST;

$name = $_POST['uname'];
$pass1 = $_POST['pass'];
$hashpass = md5($pass1);

$s = "select uname, email from users where uname = '$name' and pass = '$hashpass' ";

$result = mysqli_query($link,$s);

$num = mysqli_num_rows($result);

if ($num == 1){
    header("location:report.php");
}else{
  echo "Error. Kindly try again";
 
}