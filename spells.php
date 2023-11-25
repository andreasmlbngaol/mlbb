<?php
require "functions.php";
$spells = spells();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Spells</title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require "partial/navbar.php" ?>
    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dre X MLBB</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <a class="text-decoration-none text-reset" href="heroes.php"><li class="list-group-item">All</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=tank"><li class="list-group-item">Tank</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=fighter"><li class="list-group-item">Fighter</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=assassin"><li class="list-group-item">Assassin</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=mage"><li class="list-group-item">Mage</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=marksman"><li class="list-group-item">Marksman</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=support"><li class="list-group-item">Support</li></a>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <header class="container text-light text-center text-decoration-underline mb-4">
        <h1>Emblems</h1>
    </header>
    <main>
        <?php require "partial/loader.php" ?>
        <div class="container">
            <div class="row mx-auto">
                <?php foreach ($spells as $spell): 
                $name = $spell['name'];
                $effect = spanColor($spell['effect']);
                $cooldown = $spell['cooldown'];
                ?>
                <div class="col-md-3 my-3 text-center">
                    <div class="card bg-transparent border-0 d-flex bg-gradient">
                        <img src="src/img/spells/<?= strtolower($name) ?>.webp" class="card-img-top spell-img mx-auto my-3" alt="<?= $name ?>">
                        <div class="card-body">
                            <h5 class="card-title text-light"><?= $name ?></h5>
                            <p class="btn btn-info">Cooldown: <?= $cooldown ?>s</p>
                            <p class="card-text text-sm-start text-light">Effect:<br><?= $effect ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <script src="script/script.js"></script>
</body>
</html>