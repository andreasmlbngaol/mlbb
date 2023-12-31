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
session_start();

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function utf8ize( $mixed ) {
    if (is_array($mixed)) {
        foreach ($mixed as $key => $value) {
            $mixed[$key] = utf8ize($value);
        }
    } elseif (is_string($mixed)) {
        return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
    }
    return $mixed;
}

function go($path) {
    header("Location:$path");
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

function enter($text) {
    return str_replace("×", "*", str_replace(". ", ".<br>", $text));
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

function login($post) {
    global $incorrectPassword;
    global $invalidUser;
    $username = strtolower($post['username']);
    $password = $post['password'];
    $query = "SELECT * FROM `user` WHERE `username` = '$username'";
    $result = query($query);
    if($result) {
        $passwordReal = $result[0]['password'];
        if(password_verify($password, $passwordReal)) {
            $_SESSION['user'] = $result[0];
            return TRUE;
        } else {
            $incorrectPassword = TRUE;
        }
    } else {
        $invalidUser = TRUE;
    }
    return FALSE;
}

function register($post) {
    global $conn;
    $name = $post['name'];
    $username = strtolower($post['username']);
    $password = password_hash($post['password'], PASSWORD_DEFAULT);
    $query = "SELECT * FROM `user` WHERE `username` = '$username'";
    $result = query($query);
    if($result) {
        return FALSE;
    } else {
        $query = "INSERT INTO `user` VALUES('', '$name', '$username', '$password')";
        if(mysqli_query($conn, $query)) {
            return TRUE;
        }
    }
}

function favCount($hero) {
    $query = "SELECT * FROM `favorites` WHERE `hero` = '$hero'";
    $results = query($query);
    return(count($results));
}

function favCheck($hero, $session) {
    $username = $session['user']['username'];
    $query = "SELECT * FROM `favorites` WHERE `hero` = '$hero' AND `username` = '$username'";
    if(count(query($query)) > 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function getFav($session) {
    $username = $session['user']['username'];
    $query = "SELECT `hero` FROM `favorites` WHERE `username` = '$username'";
    $favorites = [];
    foreach(query($query) as $hero) {
        array_push($favorites, $hero['hero']);
    }
    $heroes = [];
    foreach($favorites as $favorite) {
        $query = "SELECT * FROM `heroes` WHERE `name` = '$favorite'";
        array_push($heroes, query($query)[0]);
    }
    return $heroes;
}
?>