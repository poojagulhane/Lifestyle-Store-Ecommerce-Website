<?php
session_start();
session_unset();
session_destroy();
$_SESSION['logged']=false;
if (isset($_SESSION['logged']) || $_SESSION['logged']==true) {
    header('location: adminlogin.php');
    exit;
}
