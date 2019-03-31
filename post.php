<?php

    include ("config/autoloader.php");

    if (isset($_GET['article']) AND !empty($_GET['article'])) {

        //We convert the Id received through Get method to make sure it an Integer value
        $_GET['article'] = intval(htmlentities($_GET['article']));

        if ($_GET['article'] == 0){
            //We do a redirection coz the page doesn't exist
            header('Location: /goodnews');
        }else{

            //We load article information based on id
            $dataPost = loadPostById($_GET['article']);
        }

    }




?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="webroot/css/stylesheet.css">
    <link rel="stylesheet" href="webroot/css/post.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css" >
    <title>Hello, world!</title>
</head>
<body>

<!--Menu -->
<?php include ("webroot/inc/navs.php")?>

<!--Menu End-->
<!--Carousel-->


<br><br>
<!--Carousel End-->


<!-- Main Container-->
<div class="container">
    <div class="row">
        <!--Body -->
        <div class="col-sm-9">

            <!-- Row Card Post -->
            <div class="container">
                <div class="row sticky-top align-items-center" style="top: 56px; background-color: white; z-index: auto; height: 50px">
                    <div class="col-sm-6" style="padding: 0">
                        <p class="text-uppercase">
                            <?php
                            //We load category information base on post Id
                            $dataCategory = loadCategoryByIdPost($dataPost[0]['idCategory']);
                            //We print Category label or name
                            echo $dataCategory[0]['name'];
                            ?>
                        </p>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end" style="padding: 0">
                        <small class="text-muted">Post on
                            <?php echo $var = date('F j, Y', strtotime($dataPost[0]['datePost'])); ?>
                        </small>
                    </div>
                </div>
                <div class="row PostContent">




                    <img src="assets/authors/posts/<?php  echo $dataPost[0]['cover']?>" class="img-fluid" style="width: 100%; margin-bottom: 20px;">
                    <h1 class=""><?php echo $dataPost[0]['title']?></h1>

                    <p>
                        <?php echo $dataPost[0]['content']?>
                    </p>
                    <br>
                </div>
            </div>
            <!-- Row Card End -->

            <div class="container">
                <h5>COMMENT</h5>
                <hr>
                <div class="row Comment">

                    <div class="col-sm-2">
                        <div class="unknown d-flex justify-content-center shadow-sm">
                            <i class="fas fa-user fa-2x d-flex align-items-center"></i>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="text-uppercase float-left">Bakayoko YAYA</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text float-right"><small class="text-muted">Comment on April 1, 2018</small></p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <p class="">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam dolorum molestiae nam non officia qui veniam. Alias blanditiis dicta esse et impedit, iusto maxime, minus molestiae, mollitia quibusdam rerum?
                                </p>
                            </div>
                        </div>

                </div>
                </div>
            </div>

            <br><br><br>

        </div>
        <!--Body End-->



        <!--Sidebar -->
        <div class="col-sm-3 Sidebar ">
            <?php include "webroot/inc/sideBarPost.php";?>

        </div>
        <!--Side End-->


    </div>
</div>
<!--Main Container End -->


<div class="container-fluid Footer Nav1">
    <?php include "webroot/inc/footer.php";?>
</div>









<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="vendor/bootstrap/js/slim.min.js"></script>
<script src="vendor/bootstrap/js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>