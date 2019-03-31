<?php
include('config/autoloader.php');

//We collect all the article from the database
$dataPost = loadPosts();

//Pagination settings
//******************************
//Number of article per page
$postPerPage = 5;
//Total number of articles
$postTotal = count($dataPost);
//Determine the total number of page
$totalPage = ceil($postTotal / $postPerPage);
if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] >= 0  AND $_GET['page'] <= $totalPage) {
    $_GET['page'] = intval($_GET['page']);
    $pageCurrent = $_GET['page'];
} else {
    $pageCurrent = 1;
}
$start = ($pageCurrent - 1) * $postPerPage;


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
    <link rel="stylesheet" href="vendor/fontawesome/css/all.css">
    <title>Hello, world!</title>
</head>
<body>

<!--Menu -->
<?php include("webroot/inc/navs.php");?>

<!--Menu End-->
<!--Carousel-->
<?php include("webroot/inc/main-carousel.php");?>

<br><br>

<!-- Main Container-->
<div class="container">
    <div class="row">
        <!--Body -->
        <div class="col-sm-9">
            <!-- Row Card Post -->
            <div class="container">
                <div class="row">
                    <!--We call a set of article from the database to load per page-->
                    <?php $dataPostPage = loadPostsPagination($start, $postPerPage);
                    foreach ($dataPostPage as $data): ?>
                        <div class="card Card">
                            <a href="post?article=<?php echo $data['idPost'] ?>">
                                <img src="assets/authors/posts/<?php echo $data['cover'] ?>" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title subCardTitle">
                                    <a href="post?article=<?php echo $data['idPost'] ?>"
                                       class="text-decoration-none"><?php echo $data['title'] ?></a>
                                </h5>
                                <p class="card-text text-justify">
                                    <?php
                                    //We remove all the tags (html, css, js or php) from the input
                                    $var = strip_tags($data['content']);
                                    //We convert the input into lowercase string
                                    $var = strtolower($var);
                                    //We select 100 words to print out
                                    $var = substr($var, 0, 500);
                                    echo $var;
                                    ?>
                                </p>
                                <a href="post?article=<?php echo $data['idPost'] ?>" class="card-link">Read more</a>
                                <span class="card-link float-sm-right"> <i class="far fa-heart"></i> 1369</span>
                                <span class="card-link float-sm-right"> <i class="far fa-comment-alt"></i> 1369</span>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <!-- Row Card End -->

            <!--Pagination -->
            <div class="container ">

                <div class="row justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item ">
                                <a class="page-link" href="index?page=<?php echo $pageCurrent-1?>" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="index?page=<?php echo $pageCurrent?>"><?php echo $pageCurrent ?> <span
                                            class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="index?page=<?php echo $pageCurrent+1?>"><?php echo $pageCurrent+1?></a></li>
                            <li class="page-item">
                                <a class="page-link" href="index?page=<?php echo $pageCurrent+1?>">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <br>
            </div>
        </div>
        <!--Body End-->


        <!--Sidebar -->
        <div class="col-sm-3 Sidebar">
            <?php include("webroot/inc/sideBarIndex.php"); ?>
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