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
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/settings.css">
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
                            <li class="breadcrumb-item active" aria-current="page">Settings</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->



                <!--Page title End-->

                <div class="row">
                    <!--Personal information-->
                    <div class="col-sm-4">
                        <ul class="list-group Card">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="Title">General preferences for your account</p>
                                        <p class="Description">Manage GoodNews service settings for your account</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/deleteservicesoraccount.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="personal-informations" class="list-group-item list-group-item-action">
                                <span class="text-primary">Set up your account</span>
                            </a>
                        </ul>
                    </div>
                    <!--Personal information End-->

                    <!--Account Security-->
                    <div class="col-sm-4">
                        <ul class="list-group Card">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="Title">Download your data</p>
                                        <p class="Description">Create an archive of your GoodNews data</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/takeout.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="security" class="list-group-item list-group-item-action">
                                <span class="text-primary">Export your data</span>
                            </a>
                        </ul>
                    </div>
                    <!--Account Security End-->

                    <!--GoodNews Setting-->
                    <div class="col-sm-4">
                        <ul class="list-group Card">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="Title">Delete your account</p>
                                        <p class="Description">You can permanently delete your GoodNews account and all your data, like articles, comments and photos</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/delete.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="text-primary">Delete my account </span>
                            </a>
                        </ul>
                    </div>
                    <!--GoodNews Setting End-->
                </div>


            </div>
        </div>


        <!-- Main Content End -->

    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../vendor/bootstrap/js/slim.min.js"></script>
<script src="../vendor/bootstrap/js/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>