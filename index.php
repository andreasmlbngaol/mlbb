<?php
require "functions.php";
$popularities = popularity(10);
$wins = wins(10);
$banneds = banneds(10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Home</title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require "partial/navbar.php" ?>
    <!-- Header -->
    <header class="text-center text-light mb-3">
        <h1 class="text-decoration-underline">Home</h1>
    </header>
    <!-- Main -->
    <main class="container">
        <?php require "partial/loader.php" ?>
        <div id="carousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/carousel/carousel-1.jpg" class="d-block w-100" alt="Khufra">
                </div>
                <div class="carousel-item">
                    <img src="src/img/carousel/carousel-2.jpg" class="d-block w-100" alt="Leomord">
                </div>
                <div class="carousel-item">
                    <img src="src/img/carousel/carousel-3.jpg" class="d-block w-100" alt="Lunox">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container mb-5">
            <h2 class="text-light mt-2 text-decoration-underline">Most Popular in Mythic+</h2>
            <table class="table table-sm table-bordered text-center table-warning">
                <tr>
                    <th>No</th>
                    <th>Hero</th>
                    <th>Popularity</th>
                </tr>
                <?php 
                $i = 1; 
                foreach($popularities as $popularity):
                $img = str_replace(" ", "_", strtolower($popularity['name'])).".webp"; 
                ?>
                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td class="text-start">
                        <img src="src/img/hero/<?= $img ?>" alt="<?php $popularity['name'] ?>" class="border rounded ms-5" height="50">
                        <?= $popularity['name'] ?>
                    </td>
                    <td><?= $popularity['popularity'] ?></td>
                </tr>
                <?php 
                $i++; 
                endforeach ?>
            </table>

            <h2 class="text-light mt-2 text-decoration-underline">Highest Win Rate in Mythic+</h2>
            <table class="table table-sm table-bordered text-center table-warning">
                <tr>
                    <th>No</th>
                    <th>Hero</th>
                    <th>Win Rate</th>
                </tr>
                <?php 
                $i = 1; 
                foreach($wins as $win):
                $img = str_replace(" ", "_", strtolower($win['name'])).".webp"; 
                ?>
                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td class="text-start">
                        <img src="src/img/hero/<?= $img ?>" alt="<?php $win['name'] ?>" class="border rounded ms-5" height="50">
                        <?= $win['name'] ?>
                    </td>
                    <td><?= $win['win_rate'] ?></td>
                </tr>
                <?php 
                $i++; 
                endforeach ?>
            </table>

            <h2 class="text-light mt-2 text-decoration-underline">Most Banned in Mythic+</h2>
            <table class="table table-sm table-bordered text-center table-warning">
                <tr>
                    <th>No</th>
                    <th>Hero</th>
                    <th>Banned Rate</th>
                </tr>
                <?php 
                $i = 1; 
                foreach($banneds as $banned):
                $img = str_replace(" ", "_", strtolower($banned['name'])).".webp"; 
                ?>
                <tr class="align-middle">
                    <td><?= $i ?></td>
                    <td class="text-start">
                        <img src="src/img/hero/<?= $img ?>" alt="<?php $banned['name'] ?>" class="border rounded ms-5" height="50">
                        <?= $banned['name'] ?>
                    </td>
                    <td><?= $banned['banned'] ?></td>
                </tr>
                <?php 
                $i++; 
                endforeach ?>
            </table>
        </div>
            
    </main>
    <script src="script/script.js"></script>
</body>
</html>