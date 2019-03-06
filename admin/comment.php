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
                      <div class="col-sm-1"></div>
                      <div class="col-sm-10">
                          <div class="card">
                              <div class="container">
                                  <div class="row CommentCard">
                                      <!--Text lenght should be specified to maintain the display-->
                                      <p class="PostTitle text-justify font-weight-bold">Pulwama attack: Fear of retaliation spooks Pakistan; troops put on alert, Air Force conducts combat patrols</p>
                                      <small class="text-muted">Post on April 1, 2018</small>
                                      <br>
                                      <div class="d-flex justify-content-between">
                                          <p><i class="fas fa-inbox"></i>&nbsp;Category : <span class="">Apple</span></p>
                                          <p><i class="fas fa-tag"></i>&nbsp;Status : <span class="badge badge-success">Active</span></p>
                                          <p><i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments : <span class="">1369</span></p>
                                          <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span></p>
                                      </div>
                                  </div>

                              </div>



                          </div>
                      </div>
                      <div class="col-sm-2"></div>
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