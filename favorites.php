<?php
require "functions.php";
$heroes = getFav($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Favorites</title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/jquery-3.7.1.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require "partial/navbar.php" ?>
    <!-- Header -->
    <header class="text-center text-light mb-3">
        <h1 class="text-decoration-underline">My Favorites</h1>
    </header>
    <!-- Main -->
    <main class="container text-center">
    <?php require "partial/loader.php" ?>
        <div class="row justify-content-center">
            <?php foreach ($heroes as $hero): 
                $img = str_replace(" ", "_", strtolower($hero['name']));
                $name = $hero['name'];
                $title = $hero['title'];
                $primary = $hero['primary_role'];
                $secondary = $hero['secondary_role'];
            ?>
            <div class="col-md-2 mb-3">
                <a href="detail.php?hero=<?= $name ?>">
                    <div class="card heroes-card">
                        <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                        <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                            <div class="card-body-container bg-fade bg-gradient">
                                <h5 class="card-title mb-1"><?= $name ?></h5>
                                <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
        </div>
        <p class="text-light">Source: <i><a href="https://mobile-legends.fandom.com/wiki/MLBB_Wiki" target="_blank">Fandom</a></i></p>
    </main>
    <script src="script/script.js"></script>