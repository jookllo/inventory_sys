<?php
include "../conn.php";
if (isset($_POST['reset-password'])) {
$email = mysqli_real_escape_string($link, $_POST['email']);
// ensure that the user exists on our system
$query = "SELECT email FROM users WHERE email='$email'";
$results = mysqli_query($link, $query);

if (empty($email)) {
array_push($errors, "Your email is required");
}else if(mysqli_num_rows($results) <= 0) {
array_push($errors, "Sorry, no user exists on our system with that email");
}
// generate a unique random token of length 100
$token = bin2hex(random_bytes(50));

if (count($errors) == 0) {
// store token in the password-reset database table against the user's email
$sql = "INSERT INTO passreset_request(email, token) VALUES ('$email', '$token')";
$results = mysqli_query($link, $sql);

// Send email to user with the token in a link they can click on
$to = $email;
$subject = "Reset your password on examplesite.com";
$msg = "Hi there, click on this <a href='http://127.0.0.1/inventory_sys/dist/resetpass.php?token= . $token .'>'link</a> to reset your password on our site";
$msg = wordwrap($msg,70);
$headers = "From: jooklllo32@gmail.com";
mail($to, $subject, $msg, $headers);
header('location: ../createpass.php?email=' . $email);
}
}