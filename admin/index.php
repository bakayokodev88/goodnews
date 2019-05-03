<?php
    include ('inc/php-preload.php');
    include_once ('config/functions-posts.php');
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
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/posts.css">
    <link rel="icon" href="../assets/system/icon/goodnews.ico">
    <title>GoodNews : Dashboard</title>
</head>
<body id="home">

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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <!--Greeting section -->
                <div class="row justify-content-center">
                    <h1 class="page-title">
                        <?php
                        // I'm India so my timezone is Asia/Calcutta
                        date_default_timezone_set('Asia/Calcutta');

                        $hour      = date('H');
                        if ($hour >= 20) {
                            $greetings = "Good Night";
                        } elseif ($hour > 17) {
                            $greetings = "Good Evening";
                        } elseif ($hour > 11) {
                            $greetings = "Good Afternoon";
                        } elseif ($hour < 12) {
                            $greetings = "Good Morning";
                        }
                        echo $greetings;
                        ?>,
                        <?php echo $dataAuthor[0]['lastName']." ".$dataAuthor[0]['firstName'] ?>
                    </h1>
                </div>
                <!--Greeting section END-->

                <!-- Resume account Status-->

                <div class="row MainCard4"style="margin-bottom: -20px">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">
                                            <?php echo  $totalPost = count(loadPosts());?>
                                        </p>
                                        <p class="cardDashTitle">Articles</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-file-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">
                                            <?php echo  $totalComment = count(loadComment());?>
                                        </p>
                                        <p class="cardDashTitle">Comments</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-comments"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p class="cardDashNUmber">1432</p>
                                        <p class="cardDashTitle">Likes</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <span style="font-size: 48px; color: #1a73e8;"
                                              class="d-flex justify-content-center">
                                            <i class="fas fa-heart"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Resume account Status End-->

                <div class="row">
                    <!--Recent articles-->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-sm-11">
                                            <h5 class="card-title">Recent articles</h5>
                                        </div>
                                        <div class="col-sm-1 Table-control dropleft d-flex justify-content-center "
                                             style="padding-right: 0; padding-left: 0;">
                                            <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="posts?category=published">
                                                    <i class="fas fa-file-export"></i>&nbsp;&nbsp;Publish / Active
                                                </a>
                                                <a class="dropdown-item" href="posts?category=draft">
                                                    <i class="fas fa-file-signature"></i>&nbsp;&nbsp;Draft
                                                </a>
                                                <a class="dropdown-item" href="posts?category=disable">
                                                    <i class="fas fa-ban"></i>&nbsp;&nbsp;Disable
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <!--We check is is there any article in tha database-->
                                    <?php
                                            $exist = count(loadPosts());

                                            //If is there anything in the DB load them otherwise we show an error
                                            if ($exist >= 1 ){
                                                include ("inc/recentArticlesIndex.php");
                                            }else{
                                                include ("inc/errorRecentArticlesIndex.php");
                                            }

                                    ?>




                                </div>
                            </div>
                        </div>
                    <!--Recent articles END-->
                    <!--Recent Comments-->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Recent comments</h5>

                                    <?php
                                        if ($totalComment <= 6){
                                            $n= $totalComment;
                                        }else{
                                            $n=6;
                                        }
                                    ?>

                                    <?php $dataComment = loadComment(); for ($i = 0; $i < $n; $i++): ?>
                                        <ul class="list-group list-group-flush">
                                            <a href="comment?id=<?php echo $dataComment[$i]['idComment']?>"  class="list-group-item list-group-item-action Table-hover rounded" style="padding:5px;">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        <p class="ArticleTitle text-truncate" style="margin-bottom: 0"><?php echo $dataComment[$i]['comment'] ?></p>
                                                    </div>
                                                    <div class="col-sm-3 d-flex align-items-center" >
                                                        <small><?php echo $var = date('F j, Y', strtotime($dataComment[$i]['date'] )); ?></small>
                                                    </div>
                                                </div>
                                            </a>
                                        </ul>
                                    <?php endfor;?>
                                </div>
                            </div>
                        </div>
                    <!--Recent Comments END-->
                </div>


            </div>

        </div>
        <!-- Main Content End -->

    </div>
</div>

<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php'); ?>
</body>
</html>