<?php
require "functions.php";
if(!isset($_GET['role'])) {
    $heroes = heroes();
} else {
    $role = $_GET['role'];
    $heroes = heroes($role);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Heroes</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-navbar">
        <a class="btn" data-bs-toggle="offcanvas" href="#sidebar" role="button">
            <span class="navbar-toggler-icon"></span>
            Roles
        </a>
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
                        <a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1>Heroes</h1>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($heroes as $hero): 
                    $img = str_replace(" ", "_", strtolower($hero['name']));
                    $name = $hero['name'];
                    $title = $hero['title'];
                    $primary = $hero['primary_role'];
                    $secondary = $hero['secondary_role'];
                ?>
                <div class="col-sm-2 mb-3">
                    <div class="card">
                        <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                        <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                            <div class="card-body-container bg-gradient">
                                <h5 class="card-title mb-1"><?= $name ?></h5>
                                <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>


</body>
</html>