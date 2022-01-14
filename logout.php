<?php
session_start();
session_unset();
session_destroy();
$_SESSION['loggedin']=false;
if (isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true) {
    header('location: login.php');
    exit;
}

