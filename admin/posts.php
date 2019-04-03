
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
    <link rel="icon" href="../assets/system/icon/goodnews.ico">
    <title>GoodNews : Articles</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Articles</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="row Title">
                    <div class="col-sm-6">
                        <h1>Articles</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                            ipsam neque nihil officiis quae quaerat, veritatis voluptate. Atque, blanditiis dolores
                            ducimus exercitationem fugit, illum incidunt perspiciatis quam reprehenderit soluta,
                            suscipit.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row justify-content-end">
                            <!--<img src="../assets/system/img/subscriptions.png" class=" Page-illustration img-fluid"
                                 width="400" height="100" alt="">-->
                        </div>
                    </div>
                </div>

                <!--Alert Notification-->
                <div class="row">
                    <div class="col-sm-12">

                        <!--EDIT NOTIFICATION -->
                        <!--************************************************************************************************-->
                        <!--Success notification : Post has been update with success-->
                        <?php if (isset($_GET) AND isset($_GET['edit']) AND $_GET['edit']=="success" AND isset($_GET['article']) AND !empty($_GET['article']) )   :?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulation !</strong> your post N<sup>0</sup> <?php echo $_GET['article']; ?> has been updated.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Success notification : Post has been update with success End-->

                        <!--************************************************************************************************-->
                        <!--************************************************************************************************-->



                        <!--CONTACT INFORMATION NOTIFICATION -->
                        <!--************************************************************************************************-->



                        <!--************************************************************************************************-->
                        <!--************************************************************************************************-->


                        <!--Success notification for contact information update-->
                        <?php if (!empty($_GET) AND isset($_GET['delete']) AND $_GET['delete']=="success"):?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulation !</strong> your post has been deleted.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Success notification for contact information update End-->
                    </div>
                </div>
                <!--Alert Notification END-->







                <!--Loading a dynamics content for the posts page-->
                <?php

                $req = $db->prepare("SELECT * FROM posts");
                $req->execute();
                $res = $req->fetch();
                if ($res) { //Case where there's a post in a Database
                    include_once('inc/postsTable.php');
                } else {//Case with no content
                    include_once('inc/emptyContentPosts.php');
                }
                ?>


            </div>
        </div>


        <!--Modal to delete post-->

        <!-- Modal -->
        <div class="modal fade" id="ModalDeletePost" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal to delete post End-->
        <!-- Main Content End -->

    </div>
</div>


<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>