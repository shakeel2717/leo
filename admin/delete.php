<?php
include '../db.php';
if (!isset($_SESSION['admin'])) {
    header('Location: login.php?error=Login_Required');
}
$id = $_GET['id'];
$sql = "DELETE FROM `messages` WHERE `id` = '$id'";
$result = mysqli_query($db, $sql);
header('Location: index.php?message=Message_Deleted');
?>