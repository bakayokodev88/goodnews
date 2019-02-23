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
    <link rel="stylesheet" href="css/view-post.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body>

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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/posts">Articles</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">View post</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="card Card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="../assets/ban1.jpg" class="img-fluid">
                            </div>
                            <div class="col-sm-7">
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ContentOverflow">
                                    <?php include ('inc/lorem.php')?>
                                </div>

                                <br>
                                <div class="nav OptionControl justify-content-end">
                                    <button type="button" class="btn btn-light">
                                        <i class="fas fa-file-alt"></i>&nbsp;
                                        New
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <i class="fas fa-edit"></i>&nbsp;
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <i class="fas fa-trash"></i>&nbsp;
                                        Delete
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

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
</body>
</html>