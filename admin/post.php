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
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body id="posts">

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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/posts">Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->


                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <h5 class="card-title">Overview</h5>
                            </div>
                            <div class="col-sm-6">
                                <div class="btn-group dropright OptionControl float-right">
                                    <a class="btn singleActionBtn" href="new-post" role="button">
                                        <i class="fas fa-file-alt"></i>&nbsp;
                                        New article
                                    </a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <?php

                        if (isset($_GET['article']) and !empty($_GET['article'])){

                            //We force the conversion to an Integer number
                            $articleId = (int) $_GET['article'];

                            if ($articleId == 0){
                                echo "Article you are looking for can't be reached !";
                            }else{
                                $dataPost = loadArticleById($articleId);

                                //We made a request to collect the page by his Id
                               if ( count($dataPost) > 0){
                                   include ('inc/displayPost.php');
                               }else{
                                   echo "The article withe the id ".$articleId." does'nt exist";
                               }
                            }

                        }else{
                            include ('inc/errorPostDisplay.php');
                        }
                        ?>

                    </div>
                </div>

                <br><br><br>

            </div>
        </div>
        <!-- Main Content End -->




    </div>
</div>



<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>