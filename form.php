<?php
include 'db.php';
// getting all record from messages table
$query = "SELECT * FROM messages ORDER BY id ASC";
$result = mysqli_query($db, $query);
// return value as a json array
$json_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
// encode to json format
echo json_encode($json_array);
