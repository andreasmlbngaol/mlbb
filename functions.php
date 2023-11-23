<?php
$username = 'root';
$hostname = 'localhost';
$password = '';
$database = 'mlbb';

$conn = mysqli_connect($hostname, $username, $password, $database);

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function heroes($role = NULL) {
    if($role === NULL) {
        $query = "SELECT * FROM `heroes`";
    } else {
        $query = "SELECT * FROM `heroes` WHERE `primary_role` = '$role' OR `secondary_role` = '$role'";
    }
    return query($query);
}

function emblems() {
    $query = "SELECT * FROM `emblems`";
    return query($query);
}

function talents() {
    $query = "SELECT * FROM `talents`";
    return query($query);
}
?>