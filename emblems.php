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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="src/img/navbar-image.png" alt="" width="70"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                </ul>
            </div>
        </div>
    </nav>
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
                            <img src="src/img/emblem/<?php echo $slug ?>.png" alt="<?= $name ?>" width="60">
                        </a>
                        <p><?= $name ?></p>
                    </p>
                    <div class="collapse mb-3 text-dark" id="<?= $slug ?>">
                        <div class="card card-body p-0">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h6 class="attribute_1 m-0"><?= $attribute_1 ?></h6>
                                    <p class="effect_1 m-0">+<?= $effect_1 ?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="attribute_2 m-0"><?= $attribute_2 ?></h6>
                                    <p class="effect_2 m-0">+<?= $effect_2 ?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="attribute_3 m-0"><?= $attribute_3 ?></h6>
                                    <p class="effect_3 m-0">+<?= $effect_3 ?></p>
                                </li>
                                <li class="list-group-item d-flex justify-content-around">
                                    <?php foreach ($talents as $talent): 
                                    if(($talent['emblem'] === $name) && ($talent['level'] === '1')):
                                    ?>
                                    <div class="d-block talent" title="<?= $talent['description'] ?>">
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="talent_1 m-0 p-0"><?= $talent['name'] ?></p>
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
                                    <div class="d-block talent" title="<?= $talent['description'] ?>">
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="talent_2 m-0 p-0"><?= $talent['name'] ?></p>
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
                                    <div class="d-block talent" title="<?= $talent['description'] ?>">
                                        <img class="bg-dark rounded-circle" src="src/img/talents/<?= str_replace(" ", "_", strtolower($talent['name'])) ?>.webp" alt="<?= $talent['name'] ?>" width="50">
                                        <p class="talent_3 m-0 p-0"><?= $talent['name'] ?></p>
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