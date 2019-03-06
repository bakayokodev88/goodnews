<?php

//We start the session
session_start();
include ('config/police.php');
include ('../config/config.php');

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/personal-informations.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body id="account">

<!--Main Navbar-->
<?php include('inc/main-navbar.php') ?>
<!--Main Navbar End-->


<div class="container-fluid">
    <div class="row">
        <!--Side Menu-->
        <?php include('inc/sidebar.php'); ?>
        <!--Side Menu End-->


        <!-- Main Content -->
        <div class="col-sm-10 offset-md-2" id="main-content">
            <div class="container-fluid innerContent">

                <!--Breadcrumb-->
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/">Home</a></li>
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/account">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personal informations</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->


                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <h1 class="H1">Security</h1>
                                <p class="Sub">Settings to help protect your account</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="row d-flex justify-content-center">
                                    <figure class="figure AuthorPicture ">
                                        <img src="../assets/system/icon/signin.png" class="figure-img img-fluid" >
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">
                    </div>
                </div>


                <!--Profile-->
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row CardRow">
                                    <div class="col-sm-8">
                                        <p class="CardTitle">Sign in to GoodNews</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row d-flex justify-content-end">
                                            <a class="ButtonPrimary" href="#" data-toggle="modal" data-target="#ModalPasswordEdition">
                                                <i class="fas fa-edit"></i>&nbsp;
                                                UPDATE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush align-middle">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">Username</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    <span class="Value align-middle">root</span>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">Password</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    &#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;
                                                </span>
                                            </div>
                                        </div>
                                    </li>



                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">

                    </div>
                </div>
                <!--Profile End-->
                <br><br>


            </div>
        </div>


        <!-- Main Content End -->

    </div>
</div>



<!--============ Modals for edition ========================-->

<!--********** Password edition **************-->
<div class="modal fade" id="ModalPasswordEdition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="New Password" name="inputPassword">
                            <small class="form-text text-muted">
                                &nbsp;*Choose a secure password and do not reuse it for other accounts.
                            </small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="Confirm the new password" name="inputPassword2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Change the password</button>
            </div>
        </div>
    </div>
</div>
<!--********** Profile edition End***********-->

<!--============ Modals for edition End ====================-->



<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>