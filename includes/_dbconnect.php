<?php
$servername = "localhost";
$username = "root";
$passworrd = "";
$database = "ecommerce";
$con = mysqli_connect($servername, $username, $passworrd, $database);
if (!$con) {
    die("sorry");
}

?>