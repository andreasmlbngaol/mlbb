<?php
require "functions.php";
if(isset($_SESSION['user'])) {
    go('index.php');
}
$invalidUser = FALSE;
$incorrectPassword = FALSE;
if(isset($_POST['submit'])) {
    if(login($_POST)) {
        go('index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dre X MLBB | Login</title>
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
    <header class="text-center text-light mb-4">
        <img class="mb-3" src="src/img/icon.ico" alt="" width="50" height="50">
        <h1 class="text-decoration-underline">Login</h1>
    </header>
    <!-- Main -->
    <main class="container text-center d-flex justify-content-center">
        <form class="user-form" method="post" action="">
            <?php require "partial/loader.php" ?>
            <?php if($invalidUser):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Invalid User!</strong> Check Your Username.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
            <?php if($incorrectPassword):?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong Password!</strong> Type Carefully.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif ?>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start text-light my-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Doesn't have account yet?
                    <a href="register.php" class="text-navbar">
                        Register now
                    </a>
                </label>
            </div>
            <button class="btn bg-navbar w-100 py-2" type="submit" name="submit">Sign in</button>
        </form>
    </main>
    <script src="script/script.js"></script>
</body>