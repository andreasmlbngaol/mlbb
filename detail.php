<?php
require "functions.php";

if(!isset($_GET['hero'])) {
    go('heroes.php');
}

$get = $_GET['hero'];
$query = "SELECT * FROM `heroes` WHERE `name` = '$get'";
$hero = query($query)[0];
$name = $hero['name'];
$slug = slug($name);
$title = $hero['title'];
$primary = $hero['primary_role'];
$secondary = $hero['secondary_role'];
$lane = explode("; ", $hero['lane']);
$win = $hero['win_rate'];
$popularity = $hero['popularity'];
$banned = $hero['banned'];
$passiveExplode = explode("; ", $hero['passive']);
$passiveName = $passiveExplode[0];
$passiveSlug = str_replace(":", "", str_replace(" ", "_", $passiveName));
$passiveDesc = $passiveExplode[1] ?? NULL;
$skillsName = explode("; ", $hero['skills_name']);
$skillsSlug = [];
foreach($skillsName as $skill) {
    array_push($skillsSlug, str_replace(":", "", str_replace(" ", "_", $skill)));
}
$skillsDesc = explode("; ", $hero['skills_detail']);
$skillsCooldown = explode("; ", $hero['skills_cooldown']);
$min = [];
$max = [];
foreach($skillsCooldown as $cd) {
    $minMax = explode("-", $cd);
    array_push($min, 0.6 * strval(floatval($minMax[0])) ."s");
    array_push($max, 0.6 * strval(floatval($minMax[1] ?? NULL)) . "s");
}
$favCount = favCount($get);
if(isset($_SESSION['user'])) {
    $favCheck = favCheck($get, $_SESSION);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | <?= $name ?></title>
    <link rel="shortcut icon" href="src/img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php require "partial/navbar.php" ?>
    
    <!-- Header -->
    <header class="container text-light text-center">
        <h1 class="mb-0 text-decoration-underline"><?= $name ?></h1>
        <h4>(<?= $title ?>)</h4>
    </header>
    <!-- Main -->
    <main class="container text-light text-center">
        <?php require "partial/loader.php" ?>
        <div class="d-flex justify-content-center mb-4">
            <div class="text-center text-light col-md-2">
                <div class="card heroes-card">
                    <img src="src/img/hero/<?= $slug ?>.webp" class="card-img-top" alt="<?= $name ?>">
                    <a href="src/img/hero/<?= $slug ?>.webp" target="_blank">
                        <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                            <div class="card-body-container bg-fade bg-gradient">
                                <h5 class="card-title mb-1"><?= $name ?></h5>
                                <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                <p class="card-text my-0 fs-6">
                                    <?php for($i = 0; $i < count($lane); $i++){
                                         echo $lane[$i];
                                         if($i !== count($lane) - 1) {
                                            echo "/";
                                         }
                                    } ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="fav-menu d-block">
            <box-icon type='solid' name='heart-circle' color='red' size='lg'></box-icon>
            <p class=" fs-5 mt-0 mb-2" id="fav-count"><?= $favCount ?></p>
            <a <?= !isset($_SESSION['user']) ? "href='login.php' " : '' ?>class="btn btn-danger" id="add-favorite">Add To Favorites</a>
            <?php if(isset($_SESSION['user'])): ?>
            <?php if($favCheck): ?>
            <a class="btn btn-warning" id="remove-favorite">Remove From Favorites</a>
            <?php endif ?>
            <?php endif ?>
        </div>
        <div>
            <?php if(count($skillsName) > 1): ?>
                <div class="row mb-3">
                    <?php for($i = 0; $i < count($skillsName); $i++): 
                if($i % 3 === 0):
                ?>
            </div>
            <div class="row mb-3">
                <?php endif ?>
                <?php if($i === 0): ?>
                    <div class="d-flex justify-content-center">
                        <div class="skills-container col-md-6 text-center text-dark mb-3">
                            <label class="fs-4 text-decoration-underline text-light" for="<?= $passiveSlug ?>">Passive:</label>
                            <div class="mx-1 bg-light rounded px-2 pt-0">
                                <img class="pt-3" src="src/img/skills/<?= $passiveSlug ?>.webp" alt="<?= $passiveName ?>" id="<?= $passiveSlug ?>">
                                <br>
                                <label class="fs-4 text-decoration-underline" for="<?= $passiveSlug ?>"><?= $passiveName ?></label>
                                <br>
                                <div class="text-start p-2 fs-7">
                                    <p><?= enter(spanColor($passiveDesc)) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="fs-4 text-decoration-underline text-light">Skills:</label>
                <div class="row mb-3">
                    <?php endif ?>
                    <div class="skills-container col-md text-center text-dark mb-3">
                        <div class="mx-1 bg-light rounded p-2">
                            <img class="pt-3" src="src/img/skills/<?= $skillsSlug[$i] ?>.webp" alt="<?= $skillsName[$i] ?>" id="<?= $skillsSlug[$i] ?>">
                            <br>
                            <label class="fs-4 text-decoration-underline" for="<?= $skillsSlug[$i] ?>"><?= $skillsName[$i] ?></span></label>
                            <br>
                            <div class="bg-dark rounded text-light mx-4">
                                <p class="m-0">Cooldown 0%: <span class="text-success"><?= str_replace("-", "s - ", $skillsCooldown[$i] . "s") ?></p>
                                <?php if($name !== "Lunox"): ?>
                                    <p class="m-0">Cooldown 40%: <span class="text-danger"><?= $min[$i] . " - " . $max[$i] ?></span></p>
                                    <?php endif ?>
                                </div>
                                <div class="text-start p-2 fs-7">
                                    <p><?= enter(spanColor($skillsDesc[$i])) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endfor ?>
                    </div>
                </div>
    </main>
    <?php endif ?>
    <script src="script/script.js"></script>
    <script>
        $('#add-favorite').click(function() {
            $.ajax({
                url: 'ajax/favorite.php',
                method: 'POST',
                data: {hero: '<?= $get ?>', username: '<?= $_SESSION['user']['username'] ?>', operation: 'add'},
                success: function() {
                    location.reload();
                }
            })
        })
        $('#remove-favorite').click(function() {
            $.ajax({
                url: 'ajax/favorite.php',
                method: 'POST',
                data: {hero: '<?= $get ?>', username: '<?= $_SESSION['user']['username'] ?>', operation: 'remove'},
                success: function() {
                    location.reload();
                }
            })
        })
        </script>
        <?php if(isset($_SESSION['user'])): ?>
        <?php if($favCheck): ?>
        <script>
            $('#add-favorite').hide();
        </script>
        <?php endif ?>
        <?php endif ?>
    </body>
</html>