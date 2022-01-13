<?php
include 'db.php';
if (isset($_POST['message'])) {
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        // include speical characters
        $message = addslashes(htmlspecialchars($_POST['message']));
        $query = "INSERT INTO messages (username, message, created_at, updated_at) VALUES ('$username', '$message', now(), now())";
        $result = mysqli_query($db, $query);
        if ($result) {
            echo "Success";
        } else {
            echo '<script>alert("Message Not Sent")</script>';
        }
    } else {
        echo '<script>alert("Please set your username first")</script>';
    }
}
