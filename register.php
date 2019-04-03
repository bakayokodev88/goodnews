<?php
session_start();
require_once('config/config.php')

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
    <title>GoodNews : Register</title>
</head>
<body>

<!--Menu -->
<?php include("webroot/inc/navs-identification.php") ?>
<!--Menu End-->

<!-- Body-->
<div class="container Container">
    <div class="row">

        <div class="col-sm-6">
            <div class="card CardRegister">
                <div class="card-body">
                    <h1 class="">
                        Create your GoodNews Account
                    </h1>



                    <!--Register form-->
                    <form action="config/register.php" method="post">
                        <div class="form-row">
                            <!--First name-->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" name="inputFirstName"
                                        required
                                       value="<?php if (isset($_SESSION['account']['firstName'])) {
                                           echo $_SESSION['account']['firstName'];
                                       } ?>">
                            </div>
                            <!--Last name-->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="inputLastName"
                                        required value="<?php if (isset($_SESSION['account']['lastName'])) {
                                    echo $_SESSION['account']['lastName'];
                                } ?>">
                            </div>
                        </div>
                        <!--email address-->
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address"
                                   name="inputEmail" required
                                   value="<?php if (isset($_SESSION['account']['email'])) {
                                       echo $_SESSION['account']['email'];
                                   } ?>">
                            <?php if (isset($_SESSION['errors']['username'])): ?>
                                <p class='text-danger'>
                                    <i class="fas fa-exclamation-circle"></i>&nbsp;
                                    <?php echo $_SESSION['errors']['email'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <!--Username-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="inputUsername"
                                   required value="<?php if (isset($_SESSION['account']['username'])) {
                                echo $_SESSION['account']['username'];
                            } ?>">
                            <?php if (isset($_SESSION['errors']['username'])): ?>
                                <p class='text-danger'>
                                    <i class="fas fa-exclamation-circle"></i>&nbsp;
                                    <?php echo $_SESSION['errors']['username'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <!--Password-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="inputPassword"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" placeholder="Confirm" name="inputPassword2"
                                       required>
                            </div>
                            <?php if (isset($_SESSION['errors']['password'])): ?>
                                <p class='text-danger'>
                                    <i class="fas fa-exclamation-circle"></i>&nbsp;
                                    <?php echo $_SESSION['errors']['password'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6">
                                <a class="btn btn-default float-left" href="login" role="button">Sign in to an
                                    existing account</a>
                            </div>
                            <div class="from-group col-md-6 ButtonControl">
                                <button type="submit" class="btn btn-primary float-right" name="register">Register
                                </button>
                                <a class="btn float-right" href="config/register.php?clean=true" role="button">
                                    <i class="fas fa-trash-alt"></i>
                                </a>

                            </div>
                        </div>
                    </form>
                    <!--Register form End-->
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <img src="assets/system/img/join-communauty.svg" class="page-cover-register">
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