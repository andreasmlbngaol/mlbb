<?php
if(str_contains(getcwd(), "xampp")) {
    $username = 'root';
    $hostname = 'localhost';
    $password = '';
    $database = 'mlbb';
} else {
    $username = 'if0_34962067';
    $hostname = 'sql209.infinityfree.com';
    $password = 'aITkeptflow3';
    $database = 'if0_34962067_mlbb';
}

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

function heroesLane($lane) {
    $query = "SELECT * FROM `heroes` WHERE `lane` LIKE '%$lane%' ORDER BY `name`";
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

function spells() {
    $query = "SELECT * FROM `spells` ORDER BY `name`";
    return query($query);
}

function spanColor($text) {
    $hp = str_replace('HP', "<span class='span-hp'>HP</span>", $text);
    $physical = str_replace('Physical', "<span class='span-physical'>Physical</span>", $hp);
    $magic = str_replace('Magic', "<span class='span-magic'>Magic</span>", $physical);
    $hybrid = str_replace('Hybrid', "<span class='span-hybrid'>Hybrid</span>", $magic);
    $adaptive = str_replace('Adaptive', "<span class='span-adaptive'>Adaptive</span>", $hybrid);
    return $adaptive;
}

function items($class = NULL) {
    if($class === NULL) {
        $query = "SELECT * FROM `items` ORDER BY  `level` DESC, `class`, `name`";
    } else {
        $query = "SELECT * FROM `items` WHERE `class` = '$class' ORDER BY  `level` DESC, `name`";
    }
    return query($query);
}

function slug($name) {
    return str_replace(" ", "_", strtolower($name));
}

function idSlug($slug) {
    return str_replace("'", "", $slug);
}

function quoteSign($name) {
    return str_replace("'", "\\'", str_replace("\"", "\\\"", $name));
}

function popularity($limit, $desc = true) {
    $order = $desc ? "DESC" : "ASC";
    $query = "SELECT * FROM `heroes` ORDER BY `popularity` $order limit $limit";
    return query($query);
}

function wins($limit, $desc = true) {
    $order = $desc ? "DESC" : "ASC";
    $query = "SELECT * FROM `heroes` ORDER BY `win_rate` $order limit $limit";
    return query($query);
}

function banneds($limit, $desc = true) {
    $order = $desc ? "DESC" : "ASC";
    $query = "SELECT * FROM `heroes` ORDER BY `banned` $order limit $limit";
    return query($query);
}
?>