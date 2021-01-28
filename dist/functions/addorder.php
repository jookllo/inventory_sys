<?php
include "../conn.php";

if($_POST['addorder']) {
    $clname = $_POST["clname"];
    $email = $_POST["email"];
    $order_type = $_POST["order_type"];
    $amount = $_POST["amount"];
    $dateno = $_POST["dateno"];
    

    $sql = " INSERT INTO orders(client_name, email, order_type, amount, date) VALUES
    ('$clname','$email','$order_type','$amount','$dateno')";

    $math = "UPDATE inventory SET quantity = quantity - $amount WHERE product_name = '$order_type';";
    if (mysqli_query($link, $math)&&mysqli_query($link, $sql)) {
        echo "<script> alert('Records Added Successfully')</script>";
        header("Location: ../workshopmanager/orders.php");
        
    } else {
        echo "ERROR: Could not able to execute $math. " . mysqli_error($link);
    }




}