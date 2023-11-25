<?php
require "functions.php";
if(!isset($_GET['role']) && !isset($_GET['lane'])) {
    $heroes = heroes();
} else if(isset($_GET['role'])) {
    $role = $_GET['role'];
    $heroes = heroes($role);
} else {
    $lane = $_GET['lane'];
    $heroes = heroesLane($lane);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Heroes</title>
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
    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Dre X MLBB</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group">
                <h4 class="ms-1">Roles:</h4>
                <a class="text-decoration-none text-reset" href="heroes.php?role=tank"><li class="list-group-item">Tank</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=fighter"><li class="list-group-item">Fighter</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=assassin"><li class="list-group-item">Assassin</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=mage"><li class="list-group-item">Mage</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=marksman"><li class="list-group-item">Marksman</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?role=support"><li class="list-group-item">Support</li></a>
                <hr>
                <h4 class="ms-1">Lane:</h4>
                <a class="text-decoration-none text-reset" href="heroes.php?lane=Roamer"><li class="list-group-item">Roamer</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?lane=Jungler"><li class="list-group-item">Jungler</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?lane=Exp Laner"><li class="list-group-item">Exp Laner</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?lane=Mid Laner"><li class="list-group-item">Mid Laner</li></a>
                <a class="text-decoration-none text-reset" href="heroes.php?lane=Gold Laner"><li class="list-group-item">Gold Laner</li></a>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <header class="container text-light text-center text-decoration-underline">
        <h1><?= isset($_GET['role']) ? ucwords($_GET['role']) : ucwords($_GET['lane']) ?></h1>
    </header>
    <!-- Main -->
    <main class="text-center">
        <?php require "partial/loader.php" ?>
        <button class="btn btn-warning my-3" onclick="randomPick()" id="open-random">Pick Random</button>
        <button class="btn btn-close btn-danger bg-danger my-3 visually-hidden" id="close-random"></button>
        <div class="container">
            <div class="random-picker text-light visually-hidden col-md-2 mx-auto mb-3"></div>
            <hr class="random-picker visually-hidden">
            <div class="row">
                <?php foreach ($heroes as $hero): 
                    $img = str_replace(" ", "_", strtolower($hero['name']));
                    $name = $hero['name'];
                    $title = $hero['title'];
                    $primary = $hero['primary_role'];
                    $secondary = $hero['secondary_role'];
                ?>
                <div class="col-md-2 mb-3">
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
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <script src="script/script.js"></script>
    <script>
        $("#open-random").click(function() {
            $("#close-random").removeClass("visually-hidden");
        })
        $("#close-random").click(function() {
            $("#close-random").addClass("visually-hidden");
            $(".random-picker").addClass("visually-hidden");
        })

        <?php
            $jsHeroes = json_encode($heroes);
            echo "const heroes = ". $jsHeroes . ";\n";
        ?>
        let hero;
        const elem = $(".random-picker");

        function randomPick() {
            // kalau belum ada id random-pick-card
            if(!$("#random-pick-card").length) {
                createCardElement();
                console.log("Random-card has been made");
            }

            hero = heroes[Math.floor(Math.random() * heroes.length)];
            name = hero['name'];
            title = hero['title'];
            img = name.toLowerCase().replace(" ", "_") + ".webp";
            primary = hero['primary_role'];
            secondary = hero['secondary_role'];

            $("#random-pick-img").attr('src', 'src/img/hero/' + img);
            $("#random-pick-img").attr('alt', name);
            $("#random-pick-card-header").html(name);
            $("#random-pick-card-title").html("(" + title + ")");
            $("#random-pick-card-role").html(secondary ? primary + "/" + secondary : primary);
            
            $(".random-picker").removeClass('visually-hidden');

        }
    </script>
</body>
</html>