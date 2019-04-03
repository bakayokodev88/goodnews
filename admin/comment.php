<?php
include('inc/php-preload.php');
//We check the GET URL before we load the comment data
if (isset($_GET) AND !empty($_GET) AND isset($_GET['id']) AND !empty($_GET['id'])){
    $id = intval($_GET['id']);
    if ($id > 0){

    }else{
        header("Location:comments");
    }
}else{
    header("Location:comments");
}

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
    <title>GoodNews : Comment</title>
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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/comments">Comments</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Comment</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->
                <?php

                    $id = htmlentities($_GET['id']);
                    //We load comment data
                    $dataComment = loadCommentByIdComment($id);
                    //We load related data article of the comment
                    $dataArticle = loadArticleById($dataComment[0]['idPost']);


                ?>


                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-8">

                        <div class="row">
                            <div class="card CommentCard shadow-sm" style="width: 100%;">
                                <img src="../assets/authors/posts/<?php echo $dataArticle[0]['cover']?>" class="card-img-top" style="height: 230px;">
                                <div class="card-body CommentCardBody">
                                    <small class="text-muted">Post on <?php echo $var = date('F j, Y', strtotime($dataArticle[0]['datePost'] )); ?></small>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex justify-content-start">
                                            <h5 class="card-title text-justify"><?php echo $dataArticle[0]['title']?></h5>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2 d-flex">
                                            <div class="unknown d-flex justify-content-center shadow-sm">
                                                <p class="d-flex align-items-center text-uppercase font-weight-bolder"
                                                   style="font-size: 20px;margin-bottom: 0;">
                                                    <?php echo substr($dataComment[0]['firstName'], 0, 1) . '' . substr($dataComment[0]['lastName'], 0, 1) ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">

                                            <div class="d-flex justify-content-between">
                                                <p><i class="fas fa-inbox"></i>&nbsp;Category :
                                                    <span>
                                                        <?php
                                                            //We load the category data by it's Id
                                                            $nameCategory = loadCategoryById($dataArticle[0]['idCategory']);
                                                            //We echo the category name
                                                            echo $nameCategory[0]['name']; ?>
                                                    </span>
                                                </p>
                                                <p>
                                                    <i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments :
                                                    <span>
                                                        <?php
                                                            //We load all the comment with of a particular Id
                                                            $totalComment = loadCommentByIdPost($dataComment[0]['idPost']);
                                                            echo count($totalComment);
                                                        ?>

                                                    </span>
                                                </p>
                                                <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span>
                                                </p>
                                            </div>
                                            <div class="BoxComment shadow-sm rounded">
                                                <div class="row">
                                                    <div class="col-sm-8 d-flex justify-content-start">
                                                        <p><?php  echo  $dataComment[0]['firstName'].' '.$dataComment[0]['lastName']   ?></p>
                                                    </div>
                                                    <div class="col-sm-4 d-flex justify-content-end">
                                                        <small>Comment <?php echo $var = date('F j, Y', strtotime($dataComment[0]['date'] )); ?></small>
                                                    </div>
                                                </div>
                                                <p><?php  echo  $dataComment[0]['comment']?></p>
                                            </div>

                                        </div>
                                    </div>

                                    <br>
                                   <!--Comment option control -->
                                    <div class="container">
                                        <div class="row d-flex justify-content-end CommentControl">
                                            <span>
                                                <a class="btn singleActionBtn" href="#" role="button">
                                                    <i class="fas fa-reply"></i>&nbsp;
                                                    Reply
                                                 </a>
                                           </span>
                                            <span>
                                                <a href="#" class="btn singleActionBtn" data-toggle="modal" data-target="#ModalDeleteComment" role="button">
                                                    <i class="fas fa-trash"></i>&nbsp;
                                                    Delete
                                                 </a>
                                           </span>
                                        </div>
                                    </div>
                                   <!--Comment option control End-->

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

<!--============ Modals for edition ========================-->
<!--********** Delete Comment modal **************-->
<div class="modal fade" id="ModalDeleteComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Delete comment ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Do you really wanna delete this comment ?</p>
                <small class="text-danger">* Once the comment is deleted, it won't appear anymore on the post.</small>
                <br><br>
                <form action="config/functions-posts.php" method="post">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn ModalControlPrimary" name="deleteComment" value="<?php echo $dataComment[0]['idComment']; ?>">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--********** Delete Post modal End ***********-->


<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php'); ?>
</body>
</html>