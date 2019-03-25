<?php
    include ('inc/php-preload.php');
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
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/posts.css">
    <title>Admin</title>
</head>
<body id="home">

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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="row justify-content-center">
                    <h1 class="page-title">Good evening, <?php echo $dataAuthor[0]['lastName']." ".$dataAuthor[0]['firstName'] ?></h1>

                </div>

                <!-- Resume account Status-->

                <div class="row MainCard4">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">13</p>
                                        <p class="cardDashTitle">Articles</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-file-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">13</p>
                                        <p class="cardDashTitle">Drafts</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-file-signature"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">1432</p>
                                        <p class="cardDashTitle">Comments</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-comments"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">1432</p>
                                        <p class="cardDashTitle">Likes</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-heart"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Resume account Status End-->


            </div>

        </div>
        <!-- Main Content End -->

    </div>
</div>

<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php'); ?>
</body>
</html>