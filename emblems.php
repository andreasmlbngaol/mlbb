<?php
require "functions.php";
$emblems = emblems();
$talents = talents();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Emblems</title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="src/img/icon.ico" alt="" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Heroes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="heroes.php">All</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="heroes.php?role=tank">Tank</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=fighter">Fighter</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=assassin">Assassin</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=mage">Mage</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=marksman">Marksman</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=support">Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active disabled" href="emblems.php">Emblems</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="spells.php">Battle Spells</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Equipments
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="items.php">All</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="items.php?class=Attack">Attack</a></li>
                            <li><a class="dropdown-item" href="items.php?class=Magic">Magic</a></li>
                            <li><a class="dropdown-item" href="items.php?class=Defense">Defense</a></li>
                            <li><a class="dropdown-item" href="items.php?class=Movement">Movement</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="container text-light text-center text-decoration-underline mb-4">
        <h1>Emblems</h1>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row mx-2">
                <?php foreach($emblems as $emblem): 
                    $name = $emblem['name'];
                    $slug = str_replace(" ", "_", strtolower($name));
                    $attribute_1 = $emblem['attribute_1'];
                    $effect_1 = $emblem['effect_1'];
                    $attribute_2 = $emblem['attribute_2'];
                    $effect_2 = $emblem['effect_2'];
                    $attribute_3 = $emblem['attribute_3'];
                    $effect_3 = $emblem['effect_3'];
                ?>
                <div class="col-emblem text-light text-center px-1">
                    <p class="d-block gap-1 mb-3">
                        <a class="btn bg-gradient" data-bs-toggle="collapse" href="#<?= $slug ?>" role="button">
                            <img src="src/img/emblems/<?php echo $slug ?>.png" alt="<?= $name ?>" width="60">
                        </a>
                        <p><?= $name ?></p>
                    </p>
                    <div class="collapse mb-3 text-dark" id="<?= $slug ?>">
                        <div class="card card-body p-0">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h6 class="attribute_1 m-0"><?= spanColor($attribute_1) ?></h6>
                                    <p class="effect_1 m-0">+<?= $effect_1 ?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="attribute_2 m-0"><?= spanColor($attribute_2) ?></h6>
                                    <p class="effect_2 m-0">+<?= $effect_2 ?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="attribute_3 m-0"><?= spanColor($attribute_3) ?></h6>
                                    <p class="effect_3 m-0">+<?= $effect_3 ?></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-around">
                                    <?php foreach ($talents as $talent): 
                                    if(($talent['emblem'] === $name) && ($talent['level'] === '1')):
                                    ?>
                                    <div class="d-block talent">
                                        <h5 class="talent_1 m-0 mb-1 p-0"><?= $talent['name'] ?></h5>
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="m-0 p-0"><?= $talent['description'] ?></p>
                                    </div>
                                    <?php 
                                    endif;
                                    endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-around">
                                    <?php foreach ($talents as $talent): 
                                    if(($talent['emblem'] === $name) && ($talent['level'] === '2')):
                                    ?>
                                    <div class="d-block talent">
                                        <h5 class="talent_2 m-0 mb-1 p-0"><?= $talent['name'] ?></h5>
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="m-0 p-0"><?= $talent['description'] ?></p>

                                    </div>
                                    <?php 
                                    endif;
                                    endforeach;
                                    ?>
                                </li>
                                <li class="list-group-item d-flex justify-content-around">
                                    <?php foreach ($talents as $talent): 
                                    if(($talent['emblem'] === $name) && ($talent['level'] === '3')):
                                    ?>
                                    <div class="d-block talent">
                                        <h5 class="talent_3 m-0 mb-1 p-0"><?= $talent['name'] ?></h5>
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="m-0 p-0"><?= $talent['description'] ?></p>
                                    </div>
                                    <?php 
                                    endif;
                                    endforeach;
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>


</body>
</html>