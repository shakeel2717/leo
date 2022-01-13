<?php
include 'db.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    if ($username == '') {
        echo '<script>alert("Please set your username first")</script>';
    } else {
        // storing this username into session
        $_SESSION['username'] = $username;
        echo $_SESSION['username'];
        header('Location: index.php');
    }
} else {
    echo '<script>alert("Please set your username first")</script>';
}