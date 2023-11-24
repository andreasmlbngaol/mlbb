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
    <nav class="navbar sticky-top navbar-expand-lg bg-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="src/img/icon.ico" alt="" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active disabled" href="index.php">Home</a>
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
    <header class="text-center text-light mb-3">
        <h1 class="text-decoration-underline">Home</h1>
    </header>
    <!-- Main -->
    <main class="container">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
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
    </main>
</body>
</html>