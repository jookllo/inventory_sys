<?php

require_once '../conn.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST['edituser']) {

    $uname = $_POST['uname'];
    $password = $_POST['pass'];
    $email = $_POST['email'];

    $sql = "UPDATE brands SET brand_name = '$brandName', brand_active = '$brandStatus' WHERE brand_id = '$brandId'";

    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Updated";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }

    $connect->close();

    echo json_encode($valid);

} // /if $_POST