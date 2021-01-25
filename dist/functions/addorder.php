<?php
include "../conn.php";

if($_POST['addorder']) {
    $email = $_POST["email"];
    $order_type = $_POST["order_type"];
    $amount = $_POST["amount"];
    $dateno = $_POST["dateno"];

    $sql = " INSERT INTO `orders`(`email`, `order_type`, `amount`, `date`) VALUES
    ('$email','$order_type','$amount','$dateno');";

    $math = "UPDATE inventory SET quantity = quantity - $amount WHERE product_name = '$order_type';";
    if (mysqli_query($link, $math)&&mysqli_query($link, $sql)) {

        header("../workshopmanager/orders.php");
        echo "<script> alert('Records Added Successfully')</script>";
    } else {
        echo "ERROR: Could not able to execute $math. " . mysqli_error($link);
    }




}