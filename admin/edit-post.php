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

    <link rel="stylesheet" href="../vendor/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/new-post.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <link rel="icon" href="../assets/system/icon/goodnews.ico">
    <title>GoodNews : Edit</title>
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
                        <h1>Edit your article</h1>
                        <?php

                        if (isset($_GET['edit']) AND $_GET['edit']=='true' AND isset($_GET['article']) AND !empty($_GET['article']) ){

                            //We check if the article id is an Integer
                            $idPost = intval($_GET['article']);

                            if ($idPost > 0){
                                $dataPost = loadArticleById($idPost);

                            }else{
                                header("Location:../posts.php");
                            }

                        }else{
                            header("Location:../posts.php");
                        }
                        ?>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                            ipsam neque nihil officiis quae quaerat, veritatis voluptate. Atque, blanditiis dolores
                            ducimus exercitationem fugit.
                        </p>

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
                                <div class="row">
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-6 d-flex justify-content-end">
                                        <div class="btn-group dropright OptionControl">
                                            <a class="btn singleActionBtn" href="config/functions-posts.php?clearform=true" role="button">
                                                <i class="fas fa-trash"></i>&nbsp;
                                                Clear form
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <form action="config/functions-posts.php" method="post" enctype="multipart/form-data">

                                    <!--InputTitle-->
                                    <div class="form-group">
                                        <label for="InputTitle">Title</label>
                                        <input type="text" class="form-control" id="InputTitle" placeholder="Enter article title" name="inputTitle" required value="<?php echo $dataPost[0]['title']?>">
                                    </div>





                                    <div class="form-row">
                                        <!--inputCategory-->
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Category</label>
                                            <select class="custom-select" name="inputCategory" >
                                                <option selected>
                                                    - Select a category -
                                                </option>
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
                                                <input type="file" class="custom-file-input" id="customFile" name="inputCover"  required>
                                                <label class="custom-file-label text-truncate" for="customFile">Choose file</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--InputContent-->
                                    <div class="form-group">
                                        <label for="InputContent">Content</label>
                                        <textarea class="form-control summernote" id="exampleFormControlTextarea1" rows="3" name="inputContent" required value="<?php echo $dataPost[0]['content']?>">
                                        </textarea>
                                    </div>

                                    <!--Control Option-->
                                    <div class="d-flex flex-row-reverse FormControl">
                                        <button type="submit" class="btn singleActionBtn" name="draft">
                                            <i class="fas fa-file-archive"></i>&nbsp;
                                            Draft
                                        </button>
                                        <button type="submit" class="btn singleActionBtn" name="edit" value="<?php echo $dataPost[0]['idPost']?>">
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