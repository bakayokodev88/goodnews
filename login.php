<?php

require_once('config/config.php');
session_start();


?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="webroot/css/stylesheet.css">
    <link rel="stylesheet" href="webroot/css/registration-login.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <link rel="icon" href="assets/system/icon/goodnews.ico">
    <title>GoodNews - Login</title>
</head>
<body>

<!--Menu -->
<?php include("webroot/inc/navs-identification.php") ?>
<!--Menu End-->

<!-- Body-->
<div class="container Container">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <img src="assets/system/img/login.svg" class="img-fluid page-cover">
            </div>
        </div>
        <div class="col-sm-6">

            <div class="card Card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="assets/system/icon/goodnews.png" class="img-fluid LoginIcon" width="64px" height="64px">
                    </div>
                    <p class="SignIn">Sign in</p>
                    <p class="Sub">to continue to GoodNews</p>
                    <?php
                        if (isset($_GET) && isset($_GET['access'])){
                            echo "<p class='text-danger text-center'><i class=\"fas fa-exclamation-circle\"></i>&nbsp; Username or password incorrect !</p>";
                        }
                    ?>
                    <?php ?>

                    <form action="config/login.php" method="post">
                        <div class="form-group">
                            <label for="UsernameLogin">Username</label>
                            <input type="text" class="form-control" placeholder="Enter your username"
                                   name="inputUsername" required>
                            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your Password"
                                   name="inputPassword" required>
                        </div>
                        <div class="form-row ButtonRow">
                            <div class="from-group col-md-8">
                                <a class="btn btn-default float-left" href="register.php" role="button">
                                    <i class="far fa-user"></i>
                                    Create an account
                                </a>
                            </div>
                            <div class="from-group col-md-4">
                                <button type="submit" class="btn btn-primary float-right" name="login">Log in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Body End-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/bootstrap/js/slim.min.js"></script>
    <script src="vendor/bootstrap/js/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>