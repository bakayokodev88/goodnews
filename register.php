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
    <title>Hello, world!</title>
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
                    <h1 class="">Create your GoodNews Account</h1>

                    <!--Error testing to delete-->
                    <?php

                        //Test de de la procedure d'incription
                        if (isset($_POST) && isset($_POST['clean'])) {
                            session_destroy();
                            header('Location: register.php?clean=true');
                        }

                        if (isset($_POST) && isset($_POST['register'])) {

                            //Control the email
                            if (isset($_POST['inputEmail'])) {
                                //we check if the email address is unique
                                $req = $db->prepare("SELECT id FROM authors WHERE email=?");
                                $req->execute([$_POST['inputEmail']]);
                                $res = $req->fetch();
                                if ($res) {
                                    $_SESSION['errors']['email'] = "This email is already used for another account";
                                    echo "This email is already used for another account";
                                } else {
                                    //In case of success we save the input
                                    $_SESSION['account']['email'] = $_POST['inputEmail'];
                                }
                            }


                            if (isset($_POST['inputUsername'])) {
                                //In case of success we save the input
                                $req = $db->prepare("SELECT id FROM authors WHERE login=?");
                                $req->execute([$_POST['inputUsername']]);
                                $res = $req->fetch();
                                if ($res){
                                    $_SESSION['errors']['username'] = "Username is already used for another account";
                                    echo "This email is already used for another account";
                                }else{
                                    $_SESSION['account']['username'] = $_POST['inputUsername'];
                                }

                            }

                            //Password match ?
                            if ($_POST['inputPassword'] != $_POST['inputPassword2']) {
                                $_SESSION['errors']['password'] = "Password doesn't match session";
                            }

                            

                        }

                        debug($_SESSION['errors']);
                        debug($_SESSION['account']);


                    ?>



                    <!--Register form-->
                    <form action="register.php" method="post">
                        <div class="form-row">
                            <!--First name-->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="First Name" name="inputFirstName"
                                        required>
                            </div>
                            <!--Last name-->
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="inputLastName"
                                        >
                            </div>
                        </div>
                        <!--email address-->
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address"
                                   name="inputEmail" required value="<?php if (isset($_SESSION['account']['email'])) {
                                echo $_SESSION['account']['email'];
                            } ?>">
                        </div>
                        <!--Username-->
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="inputUsername"
                                   required>
                        </div>
                        <!--Password-->
                        <div class="form-row">
                            <!--Password-->
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" placeholder="Password" name="inputPassword"
                                       required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" class="form-control" placeholder="Confirm" name="inputPassword2"
                                       required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="from-group col-md-6">
                                <a class="btn btn-default float-left" href="login" role="button">Sign in to an
                                    existing account</a>
                            </div>
                            <div class="from-group col-md-6 ButtonControl">
                                <button type="submit" class="btn btn-primary float-right" name="register">Register
                                </button>
                                <button type="submit" class="btn float-right" name="Clean">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
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