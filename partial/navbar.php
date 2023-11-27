<?php $page = basename($_SERVER['PHP_SELF']) ?>
<!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg bg-navbar mb-2">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="src/img/icon.ico" alt="" height="50"></a>
            <?php if(str_contains($page, "heroes") || str_contains($page, "items")): ?>
            <a class="btn" data-bs-toggle="offcanvas" href="#sidebar" role="button">
                <span class="navbar-toggler-icon"></span>
                <?= str_contains($page, "heroes") ? "Filter" : "Filter" ?>
            </a>
            <?php endif ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link<?= str_contains($page, "index") ? " active disabled" : "" ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= str_contains($page, "heroes") ? " active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Heroes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="heroes.php?role=tank">Tank</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=fighter">Fighter</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=assassin">Assassin</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=mage">Mage</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=marksman">Marksman</a></li>
                            <li><a class="dropdown-item" href="heroes.php?role=support">Support</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="heroes.php?lane=Roamer">Roamer</a></li>
                            <li><a class="dropdown-item" href="heroes.php?lane=Jungler">Jungler</a></li>
                            <li><a class="dropdown-item" href="heroes.php?lane=Exp Laner">Exp Laner</a></li>
                            <li><a class="dropdown-item" href="heroes.php?lane=Mid Laner">Mid Laner</a></li>
                            <li><a class="dropdown-item" href="heroes.php?lane=Gold Laner">Gold Laner</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= str_contains($page, "emblems") ? " active disabled" : "" ?>" href="emblems.php">Emblems</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= str_contains($page, "spells") ? " active disabled" : "" ?>" href="spells.php">Battle Spells</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?= str_contains($page, "items") ? " active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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