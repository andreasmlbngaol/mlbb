<?php
require "../functions.php";
$hero = $_POST['hero'];
$username = $_POST['username'];
$operation = $_POST['operation'];
if($operation === 'add') {
    $query = "INSERT INTO `favorites` VALUES ('', '$hero', '$username')";
} else {
    $query = "DELETE FROM `favorites` WHERE `hero` = '$hero' AND `username` = '$username'";
}
mysqli_query($conn, $query);
?>