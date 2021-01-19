<?php

include "../conn.php";

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST['adduser']) {

    $uname = $_POST['uname'];
    $email = $_POST['email'];

    $password=$_SESSION[md5('pass')];

    $sql = "INSERT INTO users  (uname, email,pass) VALUES ('$uname', '$email','$password')";

    if($connect->query($sql) === TRUE) {
        $valid['success'] = true;
        $valid['messages'] = "Successfully Added";
    } else {
        $valid['success'] = false;
        $valid['messages'] = "Error while adding the members";
    }


    $connect->close();

    echo json_encode($valid);

} // /if $_POST