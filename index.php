<?php
require "functions.php";
$carousels = count(scandir("src/img/carousel/")) - 2;
$rank = 6;
$popularities = popularity($rank);
$lessPopularities = popularity($rank, false);
$wins = wins($rank);
$loses = wins($rank, false);
$banneds = banneds($rank);
$opens = banneds($rank, false);
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
    <script src="script/jquery-3.7.1.min.js"></script>
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
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php for($i = 1; $i <= $carousels; $i++): ?>
                <div class="carousel-item <?= $i == 1 ? "active" : ""?>">
                    <img src="src/img/carousel/carousel-<?= $i ?>.jpg" class="d-block w-100" alt="Carousel <?= $i ?>">
                </div>
                <?php endfor ?>
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
        <p class="text-center text-light mt-0 mb-5">Source: <i><a href="https://uhdpaper.com" targer="_blank">UHD Paper</a></i></p>
        <div class="container mb-5 text-center d-grid">
            <h3 class="text-light">Info is update until Season 30, November 23<sup>rd</sup> 2023 (Rank Mythic+)</h3>
            <h4 class="text-light">Patch: 1.8.32.905.3 (Moskov Revamp)</h4>
            <div class="category-button">
                <a class="btn bg-info m-2" id="most-popular-open" data-bs-toggle="collapse" href="#most-popular" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Most Popular</h4>
                </a>
                <a class="btn bg-info m-2" id="least-popular-open" data-bs-toggle="collapse" href="#least-popular" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Least Popular</h4>
                </a>
            </div>
            <div class="rank-container">
                <div class="collapse" id="most-popular">
                    <div class="row">
                        <?php foreach ($popularities as $popularity): 
                            $img = str_replace(" ", "_", strtolower($popularity['name']));
                            $name = $popularity['name'];
                            $title = $popularity['title'];
                            $primary = $popularity['primary_role'];
                            $secondary = $popularity['secondary_role'];
                            $popularityRate = $popularity['popularity'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text my-0 fs-6 text-info fw-semibold">Popularity: <span><?= $popularityRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="rank-container">

                <div class="collapse" id="least-popular">
                    <div class="row">
                        <?php foreach ($lessPopularities as $lessPopular): 
                            $img = str_replace(" ", "_", strtolower($lessPopular['name']));
                            $name = $lessPopular['name'];
                            $title = $lessPopular['title'];
                            $primary = $lessPopular['primary_role'];
                            $secondary = $lessPopular['secondary_role'];
                            $popularityRate = $lessPopular['popularity'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text text-warning fw-semibold my-0 fs-6">Popularity: <span><?= $popularityRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            
            <div class="category-button">
                <a class="btn bg-info m-2" id="most-win-open" data-bs-toggle="collapse" href="#most-win" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Highest Win Rate</h4>
                </a>
                <a class="btn bg-info m-2" id="least-win-open" data-bs-toggle="collapse" href="#least-win" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Lowest Win Rate</h4>
                </a>
            </div>
            <div class="rank-container">
                <div class="collapse" id="most-win">
                    <div class="row">
                        <?php foreach ($wins as $win): 
                            $img = str_replace(" ", "_", strtolower($win['name']));
                            $name = $win['name'];
                            $title = $win['title'];
                            $primary = $win['primary_role'];
                            $secondary = $win['secondary_role'];
                            $winRate = $win['win_rate'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text my-0 fs-6 text-warning fw-semibold">Win Rate: <span><?= $winRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <div class="rank-container">
                <div class="collapse" id="least-win">
                    <div class="row">
                        <?php foreach ($loses as $lose): 
                            $img = str_replace(" ", "_", strtolower($lose['name']));
                            $name = $lose['name'];
                            $title = $lose['title'];
                            $primary = $lose['primary_role'];
                            $secondary = $lose['secondary_role'];
                            $winRate = $lose['win_rate'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text text-danger fw-semibold my-0 fs-6">Win Rate: <span><?= $winRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            
            <div class="category-button">
                <a class="btn bg-info m-2" id="most-banned-open" data-bs-toggle="collapse" href="#most-banned" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Most Banned</h4>
                </a>
                <a class="btn bg-info m-2" id="least-banned-open" data-bs-toggle="collapse" href="#least-banned" role="button">
                    <h4 class="text-dark mt-2 text-decoration-underline">Least Banned</h4>
                </a>
            </div>
             
            
            <div class="rank-container">
                <div class="collapse" id="most-banned">
                    <div class="row">
                        <?php foreach ($banneds as $banned): 
                            $img = str_replace(" ", "_", strtolower($banned['name']));
                            $name = $banned['name'];
                            $title = $banned['title'];
                            $primary = $banned['primary_role'];
                            $secondary = $banned['secondary_role'];
                            $bannedRate = $banned['banned'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text text-danger fw-semibold my-0 fs-6">Banned Rate: <span><?= $bannedRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
               


            <div class="rank-container">

                <div class="collapse" id="least-banned">
                    <div class="row">
                        <?php foreach ($opens as $open): 
                            $img = str_replace(" ", "_", strtolower($open['name']));
                            $name = $open['name'];
                            $title = $open['title'];
                            $primary = $open['primary_role'];
                            $secondary = $open['secondary_role'];
                            $bannedRate = $open['banned'];
                            ?>
                        <div class="col-md-2 mb-3">
                            <div class="card heroes-card">
                                <img src="src/img/hero/<?= $img ?>.webp" class="card-img-top" alt="<?= $name ?>">
                                <div class="card-img-overlay d-flex flex-column justify-content-end m-0 p-0 text-center text-light">
                                    <div class="card-body-container bg-fade bg-gradient">
                                        <h5 class="card-title mb-1"><?= $name ?></h5>
                                        <p class="card-text text-info fw-semibold my-0 fs-6">Banned Rate: <span><?= $bannedRate ?>%</span></p>
                                        <p class="card-text my-0 fs-6">(<?= $title ?>)</p>
                                        <p class="card-text my-0 fs-6"><?= $primary ?><?php echo ($secondary) ? '/' . $secondary : '' ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <p class="text-light m-1 text-decoration-none">Source: <i><a class="text-danger" href="https://m.mobilelegends.com/en/rank" target="_blank">Mobile Legends Official</a></i></p>
        </div>
            
    </main>
    <script src="script/script.js"></script>
</body>
</html>