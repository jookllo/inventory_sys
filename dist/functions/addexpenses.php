<?php
include "../conn.php";

if($_POST['addexpense']) {
    $ename = $_POST["ename"];
    $quantity = $_POST["quantity"];
    $pin = $_POST["pin"];
    $edate = $_POST["edate"];
    $amount = $_POST["amount"];


    $sql = " INSERT INTO `expenses`(`ename`, `quantity`, `pin_no`, `date`, `amount`) VALUES 
    ('$ename','$quantity','$pin','$edate','$amount');";

    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}