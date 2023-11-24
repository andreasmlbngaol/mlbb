<?php
require "functions.php";
if(!isset($_GET['class'])) {
    $items = items();
} else {
    $class = $_GET['class'];
    $items = items($class);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Equipments</title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-navbar">
        <a class="btn" data-bs-toggle="offcanvas" href="#sidebar" role="button">
            <span class="navbar-toggler-icon"></span>
            Type
        </a>
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
                        <a class="nav-link" href="emblems.php">Emblems</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="spells.php">Battle Spells</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active disabled" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dre X MLBB</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <a class="text-decoration-none text-reset" href="items.php"><li class="list-group-item">All</li></a>
                <a class="text-decoration-none text-reset" href="items.php?class=Attack"><li class="list-group-item">Attack</li></a>
                <a class="text-decoration-none text-reset" href="items.php?class=Magic"><li class="list-group-item">Magic</li></a>
                <a class="text-decoration-none text-reset" href="items.php?class=Defense"><li class="list-group-item">Defense</li></a>
                <a class="text-decoration-none text-reset" href="items.php?class=Movement"><li class="list-group-item">Movement</li></a>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <header class="container text-light text-center text-decoration-underline mb-4">
        <h1>Equipments</h1>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row mx-2">
                <?php foreach ($items as $item): 
                $name = $item['name'];
                $slug = slug($name);
                $price = $item['price'];
                $class = $item['class'];
                $attributes = explode(";", spanColor($item['attributes']));
                $skills = explode(";", spanColor($item['skills']));
                ?>
                <div class="col-item text-light text-center px-1">
                    <p class="d-block gap-1 mb-3">
                        <a class="btn bg-gradient" data-bs-toggle="collapse" href="#<?= idSlug($slug) ?>" role="button">
                            <img src="src/img/items/<?php echo $slug ?>.webp" alt="<?= $name ?>" width="60">
                        </a>
                        <p><?= $name ?></p>
                    </p>
                    <div class="collapse mb-3 text-dark text-start" id="<?= idSlug($slug) ?>">
                        <div class="card card-body p-0">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="text-center text-warning">$ <?= $price ?></p>
                                    <?php foreach($attributes as $attribute): ?>
                                    <p class="attributes m-0"><?= $attribute ?></p>
                                    <?php endforeach ?>
                                    <?php if($item['skills'] != NULL): ?>
                                    <hr>
                                    <h6>Unique:</h6>
                                    <?php foreach($skills as $skill): ?>
                                    <p class="skills m-0"><?= $skill ?></p>
                                    <?php endforeach ?>
                                    <?php endif ?>
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