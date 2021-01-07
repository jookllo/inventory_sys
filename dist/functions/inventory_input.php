<?php
include "../conn.php";

    $product_name = mysqli_escape_string($link,$_REQUEST['pname']);
    $quantity = mysqli_escape_string($link,$_REQUEST['quantity']);
    $price = mysqli_escape_string($link,$_REQUEST['price']);
    $sql = "insert into inventory(quantity,product_name,price) values ('$quantity','$product_name','$price')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }