<?php

//We start the session
session_start();
include ('config/police.php');
include ('../config/config.php');
include ('config/function-personal-information.php');

//We load all the personal information of the User
$dataAuthor = loadPersonalInformationData();


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
    <link rel="stylesheet" href="css/personal-informations.css">
    <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
    <title>Admin</title>
</head>
<body id="account">

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
                            <li class="breadcrumb-item"><a href="http://localhost/goodnews/admin/account">Account</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Personal informations</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->


                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-9">
                                <h1 class="H1">Security</h1>
                                <p class="Sub">Settings to help protect your account</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="row d-flex justify-content-center">
                                    <figure class="figure AuthorPicture ">
                                        <img src="../assets/system/icon/signin.png" class="figure-img img-fluid" >
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <!--Alert zone notifications -->
                        <!--PASSWORD NOTIFICATION -->
                        <!--************************************************************************************************-->
                        <!--Success notification : Password updated correctly -->
                        <?php if ( isset($_GET['updatePassword']) AND !empty($_GET['updatePassword']) AND $_GET['updatePassword']=="success" ):?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-smile-wink"></i> Congratulation</strong>, your password has been updated with success.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Success notification : Password updated correctly END-->


                        <!--Error notification : current password doesn't match-->
                        <?php if ( isset($_GET['updatePassword']) AND !empty($_GET['updatePassword']) AND $_GET['updatePassword']=="error" AND $_GET['code'] ==1 ):?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-frown"></i> Sorry</strong>, the provided current password doesn't match with ours. You may try again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Error notification : current password doesn't match END-->

                        <!--Error notification : current password doesn't match-->
                        <?php if ( isset($_GET['updatePassword']) AND !empty($_GET['updatePassword']) AND $_GET['updatePassword']=="error" AND $_GET['code'] ==2 ):?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-frown"></i> Sorry</strong>, Make sure your new password respect the conformity. You may try again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Error notification : current password doesn't match END-->
                        <!--PASSWORD NOTIFICATION -->
                        <!--************************************************************************************************-->




                        <!--USERNAME NOTIFICATION -->
                        <!--************************************************************************************************-->
                        <!--Success notification : Username updated correctly -->
                        <?php if ( isset($_GET['updateUsername']) AND !empty($_GET['updateUsername']) AND $_GET['updateUsername']=="success" ):?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-smile-wink"></i> Congratulation</strong>, your username has been updated with success.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Success notification : Username updated correctly END-->
                        <!--Error notification : Provided username already exist-->
                        <?php if ( isset($_GET['updateUsername']) AND !empty($_GET['updateUsername']) AND $_GET['updateUsername']=="failed" AND $_GET['code'] ==1 ):?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-frown"></i> Sorry</strong>, the provided username is already taken. You may try another username.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Error notification : Provided username already exist END-->
                        <!--Error notification : Provided username is not conformed-->
                        <?php if ( isset($_GET['updateUsername']) AND !empty($_GET['updateUsername']) AND $_GET['updateUsername']=="failed" AND $_GET['code'] ==2 ):?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="far fa-frown"></i> Sorry</strong>, Make sure your new username respect the conformity. You may try again.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <!--Error notification : Provided username already exist END-->
                        <!--Alert zone notifications END-->

                    </div>
                    <div class="col-sm-1">
                    </div>
                </div>


                <!--Profile-->
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row CardRow">
                                    <div class="col-sm-12">
                                        <p class="CardTitle">Sign in to GoodNews</p>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush align-middle">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">Username</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="Value align-middle">
                                                    <span class="Value align-middle">
                                                        <?php echo $dataAuthor[0]['login']?>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="col-sm-4 d-flex justify-content-end">
                                                <div class="btn-group">
                                                    <a class="btn singleActionBtn" href="#" data-toggle="modal" data-target="#ModalUsernameEdition">
                                                        Update
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">Password</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="Value align-middle">
                                                    &#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;
                                                </span>
                                            </div>
                                            <div class="col-sm-4 d-flex justify-content-end">
                                                <div class="btn-group">
                                                    <a class="btn singleActionBtn" href="#" data-toggle="modal" data-target="#ModalPasswordEdition">
                                                        Update
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>



                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1">

                    </div>
                </div>
                <!--Profile End-->
                <br><br>


            </div>
        </div>


        <!-- Main Content End -->

    </div>
</div>



<!--============ Modals for edition ========================-->

<!--********** Username edition **************-->
<div class="modal fade" id="ModalUsernameEdition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update my username</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/function-personal-information.php" method="post">
                    <!--Current username-->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="<?php echo $dataAuthor[0]['login']?>"  disabled>
                            <small class="form-text text-muted">
                                &nbsp;*This is your current username.
                            </small>
                        </div>
                    </div>
                    <!--Current username END-->

                    <!-- New Username -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="New Username" name="inputUsername" required>
                            <small class="form-text text-muted">
                                &nbsp;*Choose a secure and unique username for your account.
                            </small>
                        </div>
                    </div>
                    <!-- New Username End-->

                    <!--New password confirmation -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Confirm your Username" name="inputUsername2"required>
                        </div>
                    </div>
                    <!--New password confirmation END-->

                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary" name="updateUsername">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--********** Username edition End***********-->
<!--********** Password edition **************-->
<div class="modal fade" id="ModalPasswordEdition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Update my password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="config/function-personal-information.php" method="post">
                    <!--Current password-->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="Current Password" name="inputCurrentPassword" required>
                            <small class="form-text text-muted">
                                &nbsp;*Provide your password to prove your identity .
                            </small>
                        </div>
                    </div>
                    <!--Current password END-->
                    <!-- New password -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="New Password" name="inputPassword" required>
                            <small class="form-text text-muted">
                                &nbsp;*Choose a secure password and do not reuse it for other accounts.
                            </small>
                        </div>
                    </div>
                    <!-- New password  End-->
                    <!--New password confirmation -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="password" class="form-control" placeholder="Confirm the new password" name="inputPassword2" required>
                        </div>
                    </div>
                    <!--New password confirmation END-->
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="updatePassword">Change the password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--********** Password edition End***********-->

<!--============ Modals for edition End ====================-->



<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>