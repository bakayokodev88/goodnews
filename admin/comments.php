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
                    <div class="row rowTable">
                        <table class="table table-borderless ArticleTable">
                            <thead>
                            <tr>
                                <th scope="col" style="padding-left: 0;">Comments</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <!--Comment data-->
                                <td>
                                    <div class="row CommentRows align-middle">
                                        <div class="col-sm-1">
                                            <img src="../assets/people/jakub_škvára.jpg"
                                                 class="img-fluid rounded-circle CommentImg" alt="">
                                        </div>
                                        <div class="col-sm-10">
                                            <p class="Category font-weight-bold">Category</p>
                                            <p class="ArticleTitle font-weight-bold">Article Title</p>
                                            <p class="CommentItself">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Debitis et facilis maxime nisi obcaecati rem! Beatae consectetur
                                                delectus distinctio impedit...</p>
                                        </div>
                                        <div class="col-sm-1 align-middle Table-control">

                                            <div class="dropdown">
                                                <span class="align-middle">
                                                    <a class="btn btn-default " href="#" role="button"
                                                       id="dropdownMenuLink"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="comment.php">
                                                        <i class="far fa-folder-open"></i>
                                                        &nbsp; View
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                       data-target="#ModalCommentDelete">
                                                        <i class="far fa-trash-alt"></i>
                                                        &nbsp; Delete
                                                    </a>
                                                </div>
                                                </span>

                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <!--Comment data End-->
                            </tr>
                            <tr>
                                <!--Comment data-->
                                <td>
                                    <div class="row CommentRows align-middle">
                                        <div class="col-sm-1">
                                            <img src="../assets/people/jakub_škvára.jpg"
                                                 class="img-fluid rounded-circle CommentImg" alt="">
                                        </div>
                                        <div class="col-sm-10">
                                            <p class="Category font-weight-bold">Category</p>
                                            <p class="ArticleTitle font-weight-bold">Article Title</p>
                                            <p class="CommentItself">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Debitis et facilis maxime nisi obcaecati rem! Beatae consectetur
                                                delectus distinctio impedit...</p>
                                        </div>
                                        <div class="col-sm-1 align-middle Table-control">

                                            <div class="dropdown">
                                                <span class="align-middle">
                                                    <a class="btn btn-default " href="#" role="button"
                                                       id="dropdownMenuLink"
                                                       data-toggle="dropdown" aria-haspopup="true"
                                                       aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="comment.php">
                                                        <i class="far fa-folder-open"></i>
                                                        &nbsp; View
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                       data-target="#ModalCommentDelete">
                                                        <i class="far fa-trash-alt"></i>
                                                        &nbsp; Delete
                                                    </a>
                                                </div>
                                                </span>

                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <!--Comment data End-->
                            </tr>
                            </tbody>
                        </table>
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


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../vendor/bootstrap/js/slim.min.js"></script>
<script src="../vendor/bootstrap/js/popper.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>