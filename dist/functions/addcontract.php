<?php
include "../conn.php";

if($_POST['addcontract']) {
    $cname = $_POST["compname"];
    $camount = $_POST["contractamount"];
    $cdate = $_POST["cdate"];
    $materials = $_POST["materials"];
    $contact = $_POST["contact"];
    $expenses = $_POST["expenses"];

    $sql = " INSERT INTO contract (company_name,contract_amount,date_created,materials,contact,expense_amount) values 
    ('$cname','$camount','$cdate','$materials','$contact','$expenses');";

    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}