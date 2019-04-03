<?php
    include ('inc/php-preload.php');
    $dataAuthor = loadPersonalInformationData();
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
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <link rel="icon" href="../assets/system/icon/goodnews.ico">
    <title>GoodNews : My account</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Account</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <!--Page title-->
                <div class="row d-flex justify-content-center">
                    <figure class="figure AuthorPicture ">
                        <?php
                        if (isset($dataAuthor[0]['photo']) AND !empty($dataAuthor[0]['photo'])){
                            $photo = "../assets/authors/profiles/".$dataAuthor[0]['photo']."";
                        }else{
                            $photo  =" ../assets/system/icon/avatar.png";
                        }
                        ?>
                        <img src="<?php echo  $photo?>" class="figure-img img-fluid rounded-circle" alt="Author profile picture">
                    </figure>
                </div>
                <p class="Welcome">Welcome <?php echo $dataAuthor[0]['lastName']. " ".$dataAuthor[0]['firstName'] ?></p>
                <p class="text-center">Manage your information and the privacy and security of your data to get the most out of GoodNews services</p>
                <br>

                <!--Page title End-->

                <div class="row">
                    <!--Personal information-->
                    <div class="col-sm-4">
                        <ul class="list-group Card">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="Title">View your personal information</p>
                                        <p class="Description">Lorem ipsum dolor sit amet, delectus deleniti dolor et eveniet iusto libero, minus neque nihil quam quisquam rem reprehenderit saepe sed velit voluptatibus!</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/personal-information.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="personal-informations" class="list-group-item list-group-item-action">
                                <span class="text-primary">Take a look</span>
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
                                        <p class="Title">Security of your account</p>
                                        <p class="Description">Lorem ipsum dolor sit amet, delectus deleniti dolor et eveniet iusto libero, minus neque nihil quam quisquam rem reprehenderit saepe sed velit voluptatibus!</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/security.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="security" class="list-group-item list-group-item-action">
                                <span class="text-primary">Take a look</span>
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
                                        <p class="Title">Your GoodNews account</p>
                                        <p class="Description">Lorem ipsum dolor sit amet, delectus deleniti dolor et eveniet iusto libero, minus neque nihil quam quisquam rem reprehenderit saepe sed velit voluptatibus!</p>
                                    </div>
                                    <div class="col-sm-4 d-flex align-items-center">
                                        <img src="../assets/system/icon/account.png"  class="img-fluid AccountIcon" alt="">
                                    </div>
                                </div>
                            </li>
                            <a href="settings" class="list-group-item list-group-item-action">
                                <span class="text-primary">Take a look</span>
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


<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>