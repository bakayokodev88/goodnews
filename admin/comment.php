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
    <link rel="stylesheet" href="css/comments.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body id="comments">

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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/comments">Comments</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Comment</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->


                  <div class="row">
                      <div class="col-sm-2">
                      </div>
                      <div class="col-sm-8">
                        <div class="row">
                            <div class="card CommentCard shadow-sm rounded" style="width: 100%;">
                                <img src="../assets/ban1.jpg" class="card-img-top"  style="height: 230px;">
                                <div class="card-body CommentCardBody">
                                    <small class="text-muted">Post on April 1, 2018</small>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-start">
                                            <h5 class="card-title text-justify">Pulwama attack: Fear of retaliation spooks Pakistan; troops put on alert, Air Force conducts combat patrols</h5>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2 d-flex">
                                            <img src="../assets/people/jakub_škvára.jpg" class="rounded-circle">
                                        </div>
                                        <div class="col-sm-10">

                                            <div class="d-flex justify-content-between">
                                                <p><i class="fas fa-inbox"></i>&nbsp;Category : <span class="">Apple</span></p>
                                                <p><i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments : <span class="">1369</span></p>
                                                <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span></p>
                                            </div>
                                            <div class="BoxComment shadow-sm rounded">
                                                <div class="row">
                                                    <div class="col-sm-8 d-flex justify-content-start">
                                                        <p>Bakayoko Yaya</p>
                                                    </div>
                                                    <div class="col-sm-4 d-flex justify-content-end">
                                                        <small>Comment on, 1 April 2019</small>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque delectus dignissimos est eveniet ex excepturi, expedita laborum mollitia necessitatibus sed sequi ullam. Asperiores assumenda aut dolore, ex molestias quae voluptatum!</p>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="container">
                                        <div class="row d-flex justify-content-end CommentControl">
                                            <span>
                                                <a class="btn singleActionBtn" href="#" role="button">
                                                    <i class="fas fa-thumbs-up"></i>&nbsp;
                                                    Approved
                                                 </a>
                                           </span>
                                            <span>
                                                <a class="btn singleActionBtn" href="#" role="button">
                                                    <i class="fas fa-thumbs-down"></i>&nbsp;
                                                    Unapproved
                                                 </a>
                                           </span>
                                            <span>
                                                <a class="btn singleActionBtn" href="#" role="button">
                                                    <i class="fas fa-reply"></i>&nbsp;
                                                    Reply
                                                 </a>
                                           </span>
                                            <span>
                                                <a class="btn singleActionBtn" href="#" role="button">
                                                    <i class="fas fa-trash"></i>&nbsp;
                                                    Delete
                                                 </a>
                                           </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-2">
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