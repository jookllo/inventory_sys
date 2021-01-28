<?php

include "../conn.php";

if(isset($_POST['Update'])) {

    $uname = $_POST['ename'];
    $email = $_POST['emaile'];
    $utype = $_POST['typee'];

    

    $sql = "UPDATE users SET uname='$uname', email='$email', utype='$utype' WHERE email='$email'";

    if (mysqli_query($link, $sql)) {
        echo "<script> alert('Records Added Successfully')</script>";
        header("Location: ../admin/index.php");
        die();
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        die();
    }
}elseif(isset($_POST['Delete'])) 
{
    $email = $_POST['emaile'];

    

    $sql = "DELETE FROM users  WHERE email='$email'";

    if (mysqli_query($link, $sql)) {
        echo "<script> alert('Records Added Successfully')</script>";
        header("Location: ../admin/index.php");
        die();
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        die();
    }
}else{
    echo"<script> alert('operation error')</script>";
}




?>