<?php

include("config/autoloader.php");

if (isset($_GET['article']) AND !empty($_GET['article'])) {

    //We convert the Id received through Get method to make sure it an Integer value
    $_GET['article'] = intval(htmlentities($_GET['article']));

    if ($_GET['article'] == 0) {
        //We do a redirection coz the page doesn't exist
        header('Location: /goodnews');
    } else {

        //We load article information based on id
        $dataPost = loadPostById($_GET['article']);
    }

    //We collect the author Id for his profile Modal box
    $idAuthorForModal = $dataPost[0]['idAuthor'];

    //We load the author information
    $dataAuthor = loadAuthorData($idAuthorForModal);

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
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="vendor/node_modules/mfb/src/mfb.css">
    <link rel="icon" href="assets/system/icon/goodnews.ico">
    <title>GoodNews</title>
</head>
<body>

<!--Menu -->
<?php include("webroot/inc/navs.php") ?>

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
                <div class="row sticky-top align-items-center"
                     style="top: 56px; background-color: white; z-index: auto; height: 50px">
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
                <div class="row">
                    <div class="col-sm-12" style="padding: 0;">
                        <!--EDIT NOTIFICATION -->
                        <!--************************************************************************************************-->
                        <!--Success notification : Post has been update with success-->
                        <?php if (isset($_GET) AND isset($_GET['comment']) AND $_GET['comment'] == "posted" AND isset($_GET['article']) AND !empty($_GET['article']))   : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulation !</strong> your comment has been posted.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Success notification : Post has been update with success End-->
                    </div>
                </div>
                <div class="row PostContent">
                    <img src="assets/authors/posts/<?php echo $dataPost[0]['cover'] ?>" class="img-fluid"
                         style="width: 100%; margin-bottom: 20px;">
                    <h1 class=""><?php echo $dataPost[0]['title'] ?></h1>
                    <p>
                        <?php echo $dataPost[0]['content'] ?>
                    </p>
                    <br>
                </div>
            </div>
            <!-- Row Card End -->


            <div class="container">
                <?php
                //We load all the comment
                $dataComment = loadCommentByPostId($dataPost[0]['idPost']);
                ?>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><?php echo count($dataComment) ?> COMMENT(S)</h5>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="text-decoration-none" data-toggle="modal"
                           data-target="#authorModal">
                            <div class="row">
                                <div class="col-sm-2" class="align-middle">
                                    <img src="assets/people/25248586.jpg" class="rounded-circle shadow-sm" height="48" width="48"
                                         alt="">
                                </div>
                                <div class="col-sm-10">
                                    <small class="authorTitle">Written by</small>
                                    <p class="authorName"><?php echo $dataAuthor[0]['lastName'].' '. $dataAuthor[0]['firstName'] ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <hr>
                <?php foreach ($dataComment as $value): ?>
                    <div class="row Comment">
                        <div class="col-sm-2">
                            <div class="unknown d-flex justify-content-center shadow-sm">
                                <p class="d-flex align-items-center text-uppercase font-weight-bolder"
                                   style="font-size: 20px;margin-bottom: 0;">
                                    <?php echo substr($value['firstName'], 0, 1) . '' . substr($value['lastName'], 0, 1) ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="text-uppercase float-left">
                                        <?php echo $value['firstName'] . ' ' . $value['lastName'] ?>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="card-text float-right">
                                        <small class="text-muted">Comment
                                            on <?php echo $var = date('F j, Y', strtotime($value['date'])) ?></small>
                                    </p>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12" style="padding-left: 0; padding-right: 0;">
                                        <div class="card">
                                            <div class="card-body">
                                                <p><?php echo $value['comment'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>



                <?php if (count($dataComment) > 0): ?>
                    <hr>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">Load more</button>
                    </div>
                <?php endif; ?>

                <?php if (count($dataComment) == 0): ?>
                    <h6 class="text-center"><i class="far fa-smile"></i> There's no comment available yet. Be the first,
                        don't be shine.</h6>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#" data-mfb-label="Comment" data-toggle="modal" data-target="#commentModal"
                           class="btn ModalControlSecondary">
                            Leave a comment
                        </a>
                    </div>
                <?php endif; ?>


            </div>

            <br><br><br>


        </div>
        <!--Body End-->


        <!--Sidebar -->
        <div class="col-sm-3 Sidebar ">
            <?php include_once("webroot/inc/sideBarPost.php"); ?>
        </div>
        <!--Side End-->


    </div>


</div>
<!--Main Container End -->

<!--Floating Action Button-->
<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover" style="margin-bottom: 50px">
    <li class="mfb-component__wrap">
        <a href="#" class="mfb-component__button--main " data-mfb-label="React "
           style="color: white; background-color: #0069C0">
            <i class="mfb-component__main-icon--resting fas fa-plus"></i>
            <i class="mfb-component__main-icon--active fas fa-times"></i>
        </a>
        <ul class="mfb-component__list">
            <li>
                <a href="#" data-mfb-label="Like" class="mfb-component__button--child "
                   style="color: white; background-color: #2196F3">
                    <i class="mfb-component__child-icon far fa-thumbs-up"></i>
                </a>
            </li>
            <li>
                <a href="#" data-mfb-label="Dislike" class="mfb-component__button--child"
                   style="color: white; background-color: #2196F3">
                    <i class="mfb-component__child-icon far fa-thumbs-down"></i>
                </a>
            </li>

            <li>
                <a href="#" data-mfb-label="Comment" class="mfb-component__button--child" data-toggle="modal"
                   data-target="#commentModal" style="color: white; background-color: #2196F3">
                    <i class="mfb-component__child-icon far fa-comment-dots "></i>
                </a>
            </li>
        </ul>
    </li>
</ul>
<!--Floating Action Button END-->


<!-- Modal Section-->

<!--Comment Modal-->
<!--=============-->
<div class="modal fade" id="commentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">

            <div class="modal-body" style="width: 80%; margin-left: auto; margin-right: auto;">
                <br>

                <h5 class="modal-title">
                    <i class="far fa-comment-dots"></i>
                    Leave a comment
                </h5>
                <hr>
                <form action="config/autoloader.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="First name" name="inputFirstName"
                                   required value="">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" name="inputLastName"
                                   required value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email"
                               name="inputEmail" required value="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.
                        </small>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" placeholder="Write your comment here"
                                  style="height: 200px" name="inputComment" required></textarea>
                        <small id="commentHelp" class="form-text text-muted">Limit your comment to 500 characters.
                        </small>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn ModalControlPrimary" name="postComment"
                                value="<?php echo $dataPost[0]['idPost'] ?>">Comment
                        </button>
                    </div>
                    <br><br>
                </form>
            </div>

        </div>
    </div>
</div>
<!--Comment Modal END-->


<!--Author Modal-->
<!--=============-->
<div class="modal fade" id="authorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">

            <div class="modal-body" style="width: 90%; margin-left: auto; margin-right: auto;">
                <br>
                <div class="row">
                    <div class="col-sm-2" class="align-middle">
                        <?php
                        if (isset($dataAuthor[0]['photo']) AND !empty($dataAuthor[0]['photo'])){
                            $photo = "assets/authors/profiles/".$dataAuthor[0]['photo'];
                        }else{
                            $photo  ="assets/system/icon/avatar.png";
                        }
                        ?>
                        <img src="<?php echo $photo?>" class="rounded-circle shadow-sm" height="96" width="96"
                             alt="">
                    </div>
                    <div class="col-sm-10">
                        <small class="authorTitleModal">Author</small>
                        <p>
                            <?php echo $dataAuthor[0]['lastName'].' '. $dataAuthor[0]['firstName'] ?>
                        </p>
                        <small class="authorTitleModal">Activity</small>
                        <div class="row" style="width: 100%">
                            <div class="col-sm-4">
                                <i class="far fa-file-alt"></i>&nbsp;
                                Articles :
                                <?php echo count(loadAuthorPostsTotal($dataAuthor[0]['idAuthor']));  ?>
                            </div>
                            <div class="col-sm-4">
                                <i class="fas fa-comment-alt text-secondary"></i>&nbsp;
                                Comments :
                                <?php echo count(loadAuthorTotalComment($dataAuthor[0]['idAuthor']));  ?>
                            </div>
                            <div class="col-sm-4">
                                <i class="fas fa-heart text-danger"></i>&nbsp;
                                Likes : 1369
                            </div>
                        </div>
                        <small class="authorTitleModal">Social Media</small>
                        <div class="row" style="width: 100%">
                            <div class="col-sm-4">
                                <span style="font-size: 16px; color: Dodgerblue;">
                                  <i class="fab fa-facebook-square"></i>
                                </span>
                                <a href="<?php echo $dataAuthor[0]['facebook']?>" target="_blank" style="text-decoration: none;color: #212529;">Facebook</a>

                            </div>
                            <div class="col-sm-4">
                                <span style="font-size: 16px; color: Dodgerblue;">
                                  <i class="fab fa-twitter-square"></i>
                                </span>
                                <a href="<?php echo $dataAuthor[0]['twitter']?>" target="_blank" style="text-decoration: none;color: #212529;">Twitter</a>
                            </div>
                            <div class="col-sm-4">
                                <span style="font-size: 16px; color: Dodgerblue;">
                                  <i class="fab fa-youtube-square"></i>
                                </span>
                                <a href="<?php echo $dataAuthor[0]['youtube']?>" target="_blank" style="text-decoration: none;color: #212529;">Youtube</a>
                            </div>
                        </div>
                        <br><br><br>

                    </div>
                </div>
                <div class="row">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <p>
                                <?php
                                if (!empty($dataAuthor[0]['description'])){
                                    echo $dataAuthor[0]['description'];
                                }else{
                                    echo "No description to show yet !";
                                }

                                ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Comment Modal END-->


<!-- Modal Section END-->


<div class="container-fluid Footer Nav1">
    <?php include "webroot/inc/footer.php"; ?>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="vendor/bootstrap/js/slim.min.js"></script>
<script src="vendor/bootstrap/js/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/node_modules/mfb/src/mfb.js"></script>
</body>
</html>