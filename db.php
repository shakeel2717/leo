<?php
session_start();
// display all errors
ini_set('display_errors', 1);
// connect leopardinu database mysqli_connect
$db = mysqli_connect('localhost', 'root', '', 'leopardinu');
// check connection
if (mysqli_connect_errno()) {
    echo 'Database connection failed with following errors: ' . mysqli_connect_error();
    die();
}
?>