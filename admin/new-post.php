<?php

//We start the session
session_start();
include ('config/police.php');
include ('config/db.php');

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

    <link rel="stylesheet" href="../vendor/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/new-post.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body id="NewPost">

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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/posts">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New article</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="row Title">
                    <div class="col-sm-6">
                        <h1>Create new article</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                            ipsam neque nihil officiis quae quaerat, veritatis voluptate. Atque, blanditiis dolores
                            ducimus exercitationem fugit.
                        </p>
                        <?php
                        include ('config/functions-posts.php');?>
                    </div>
                    <div class="col-sm-6">
                        <div class="row justify-content-end">
                            <!--<img src="../assets/system/img/subscriptions.png" class=" Page-illustration img-fluid"
                                 width="400" height="200" alt="">-->
                        </div>
                        <br>
                        <div class="row d-flex justify-content-end">
                             <span>
                                <a class="btn singleActionBtn" href="posts" role="button">
                                    <i class="fas fa-file-alt"></i>&nbsp;
                                    View articles
                                </a>
                            </span>
                        </div>
                        <br>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">
                        <div class="card  Card shadow-sm">
                            <div class="container-fluid">
                                <br>

                                <form action="config/functions-posts.php" method="post" enctype="multipart/form-data">

                                    <!--InputTitle-->
                                    <div class="form-group">
                                        <label for="InputTitle">Title</label>
                                        <input type="text" class="form-control" id="InputTitle" placeholder="Enter article title" name="inputTitle" required>
                                    </div>

                                    <div class="form-row">
                                        <!--inputCategory-->
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <select class="custom-select" name="inputCategory" >
                                                <option selected> - Select a category - </option>
                                                <?php
                                                    //We call the function that load category data
                                                    $dataCategory = loadCategoryPost();
                                                    foreach ( $dataCategory as $data):?>

                                                    <option value="<?php echo $data[0]?>"><?php echo $data[1]?></option>

                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <!--InputFile-->
                                        <div class="form-group col-md-6">
                                            <label>Cover image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="inputCover">
                                                <label class="custom-file-label text-truncate" for="customFile">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--InputContent-->
                                    <div class="form-group">
                                        <label for="InputContent">Content</label>
                                        <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3" required name="inputContent">
                                        </textarea>
                                    </div>

                                    <!--Control Option-->
                                    <div class="d-flex flex-row-reverse FormControl">
                                        <button type="button" class="btn singleActionBtn" name="cancel">
                                            <i class="fas fa-trash"></i>&nbsp;
                                            Cancel
                                        </button>
                                        <button type="button" class="btn singleActionBtn" name="draft">
                                            <i class="fas fa-file-archive"></i>&nbsp;
                                            Draft
                                        </button>
                                        <button type="submit" class="btn singleActionBtn" name="publish">
                                            <i class="fas fa-file-export"></i>&nbsp;
                                            Publish
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

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