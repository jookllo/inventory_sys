<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "inventsys");
 
// Check connection
if($link === false){
    echo "Connection failed<br>";
    echo 'Error number: ' . mysqli_connect_errno() . '<br>';
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
