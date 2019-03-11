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
                            <li class="breadcrumb-item active" aria-current="page">Comment</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="row Title">
                    <div class="col-sm-6">
                        <h1>Comments page</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                            ipsam neque nihil officiis quae quaerat, veritatis voluptate. Atque, blanditiis dolores
                            ducimus exercitationem fugit, illum incidunt perspiciatis quam reprehenderit soluta,
                            suscipit.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row justify-content-end">
                            <img src="../assets/system/img/comments.png" class=" Page-illustration img-fluid"
                                 width="400" height="200" alt="">
                        </div>
                    </div>
                </div>


                <div class="container-fluid" style="padding-left: 0; padding-right: 0;">


                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Default dropright button -->
                                    <div class="btn-group dropright OptionControl">
                                        <button type="button" class="btn btn-light">
                                            <i class="far fa-file"></i>&nbsp;
                                            New article
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <div class="row">
                                            <div class="col-sm-11" style="padding-right: 0;">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search here..." aria-label="Search an article" aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline" type="button" id="button-addon2">
                                                            <i class="fas fa-redo"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-1 Table-control dropright d-flex justify-content-center " style="padding-right: 0; padding-left: 0;">

                                                <a class="btn btn-default" href="#" role="button" id="dropdownMenuLink"
                                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuLink">
                                                    <h6 class="dropdown-header">Sort by</h6>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-file-export"></i>&nbsp;&nbsp;Publish / Active
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-file-signature"></i>&nbsp;&nbsp;Draft
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-ban"></i>&nbsp;&nbsp;Disable
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <ul class="list-group list-group-flush">
                                <a href="comment.php" class="list-group-item list-group-item-action Table-hover rounded">
                                   <div class="row">
                                       <div class="col-sm-1 d-flex align-items-center" style="padding-right: 0;">
                                           <img src="../assets/people/michael_pustovit.jpg" class="rounded-circle" width="48" height="48" >
                                       </div>
                                       <div class="col-sm-11" style="padding-left: 0;">
                                           <div class="row">
                                               <div class="col-sm-8">
                                                   <p class="CommentAuthor font-weight-bold text-truncate">Bakayoko Yaya</p>
                                               </div>
                                               <div class="col-sm-4">
                                                   <small class="text-muted float-right">Comment on April 1, 2018</small>
                                               </div>
                                           </div>
                                           <p  class="ArticleTitle font-weight-bold text-truncate">
                                               Pulwama attack: Fear of retaliation spooks Pakistan; troops put on alert, Air Force conducts combat patrols
                                           </p>
                                           <p class="CommentItself text-truncate" style="margin-bottom: 0;">
                                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut beatae corporis delectus deserunt, doloremque fugiat fugit itaque nisi nulla omnis possimus quas quia quo repellendus repudiandae rerum voluptatem.
                                           </p>
                                       </div>
                                   </div>
                                </a>
                            </ul>
                        </div>
                    </div>



                </div>


            </div>
        </div>
        <!-- Main Content End -->


        <!--============ Modals for comments  ====================-->

        <!--********** Modal to view comments **************-->
        <div class="modal fade" id="ModalCommentDelete" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Comment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this comments ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!--********** Modal to view comments End **************-->
        <!--============ Modals for comments End ====================-->


    </div>
</div>



<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>