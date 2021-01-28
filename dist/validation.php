<?php
require_once("conn.php");
session_start();
$data = $_POST;

$name = $_POST['uname'];
$pass1 = $_POST['pass'];
$hashpass = md5($pass1);

$s = "select uname, pass, utype from users where uname = '$name' and pass = '$pass1' ";

$result = mysqli_query($link,$s);

$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$type = $row['utype'];

if ($num == 1){
  if($type == 1){
    header("Location: admin/index.php");
  }
  elseif($type == 2){
    header("Location: ceo/report.php");
  }
  elseif($type == 3){
    header("Location: workshopmanager/inventory.php");}

  else{
    echo "Error. Kindly try again";
   
  }


}
else{
  echo "Error. Kindly try again";
 
}