<?php

//We start the session
session_start();
include ('config/police.php');
include ('../config/config.php');
include ('config/function-personal-information.php');

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
                                <h1 class="H1">Personal informations</h1>
                                <p class="Sub">Basic information, such as your name and photo, that you use on GoodNews services</p>
                                <div class="ModalControl">
                                    <button type="button" class="btn ModalControlSecondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn ModalControlPrimary" name="updateContact">Save changes</button>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row d-flex justify-content-center">
                                    <figure class="figure AuthorPicture ">
                                        <img src="../assets/system/icon/privacycheckup.png" class="figure-img img-fluid" >
                                    </figure>
                                </div>
                            </div>

                            <?php
                                //We load all the personal information of the User
                                $dataAuthor = loadPersonalInformationData();
                                debug($dataAuthor);
                            ?>
                        </div>
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
                                    <div class="col-sm-8">
                                        <p class="CardTitle">Profil</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row d-flex justify-content-end">
                                            <a class="ButtonPrimary" href="#" data-toggle="modal" data-target="#ModalProfileEdition">
                                                <i class="fas fa-edit"></i>&nbsp;
                                                UPDATE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush align-middle">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">PHOTO</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">

                                                    <div class="row d-flex justify-content-start">
                                                        <?php
                                                            if (isset($dataAuthor[0]['photo'])){
                                                                $photo = "../assets/authors/.$dataAuthor[0]['photo']";
                                                            }else{
                                                                $photo  =" ../assets/system/icon/avatar.png";
                                                            }
                                                        ?>
                                                        <img src="<?php echo $photo?>"  class="img-fluid rounded-circle shadow  ProfilePicture" alt="Author Profile picture">
                                                    </div>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">FIRST NAME</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    <?php
                                                        if (isset($dataAuthor[0]['firstName'])){
                                                            echo $dataAuthor[0]['firstName'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">LAST NAME</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    <?php
                                                    if (isset($dataAuthor[0]['lastName'])){
                                                        echo $dataAuthor[0]['lastName'];
                                                    }else{
                                                        echo "No information";
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">ABOUT</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="text-justify">
                                                    <?php
                                                        if (isset($dataAuthor[0]['description'])){
                                                            echo $dataAuthor[0]['description'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </p>
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
                <br>


                <!--Contact Information-->
                <div class="row">
                    <div class="col-sm-1">
                    </div>
                    <div class="col-sm-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row CardRow">
                                    <div class="col-sm-8">
                                        <p class="CardTitle">Contact</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="row d-flex justify-content-end">
                                            <a class="ButtonPrimary" href="#" data-toggle="modal" data-target="#ModalContactEdition">
                                                <i class="fas fa-edit"></i>&nbsp;
                                                UPDATE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush list-group-item-action">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">ADDRESSES E-MAIL</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    <?php
                                                        if (isset($dataAuthor[0]['email'])){
                                                            echo $dataAuthor[0]['email'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">PHONE</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle">
                                                    <?php
                                                        if (isset($dataAuthor[0]['contact'])){
                                                            echo $dataAuthor[0]['contact'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">FACEBOOK</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle text-truncate">
                                                    <?php
                                                        if (isset($dataAuthor[0]['facebook'])){
                                                            echo $dataAuthor[0]['facebook'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">TWITTER</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle text-truncate">
                                                    <?php
                                                        if (isset($dataAuthor[0]['twitter'])){
                                                            echo $dataAuthor[0]['twitter'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <span class="Label align-middle">YOUTUBE</span>
                                            </div>
                                            <div class="col-sm-8">
                                                <span class="Value align-middle text-truncate">
                                                    <?php
                                                        if (isset($dataAuthor[0]['youtube'])){
                                                            echo $dataAuthor[0]['youtube'];
                                                        }else{
                                                            echo "No information";
                                                        }
                                                    ?>
                                                </span>
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
                <!--Contact Information End-->
                <br><br>


            </div>
        </div>


        <!-- Main Content End -->

    </div>
</div>


<!--============ Modals for edition ========================-->

<!--********** Profile edition **************-->
<div class="modal fade" id="ModalProfileEdition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Profile information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="config/function-personal-information.php" method="post" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="First name" name="inputFirstName" value="<?php if (isset($dataAuthor[0]['firstName'])){echo $dataAuthor[0]['firstName'];}?>">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Last name" name="inputLastName" value="<?php if (isset($dataAuthor[0]['lastName'])){echo $dataAuthor[0]['lastName'];}?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputPhoto" name="inputPhoto" >
                                <label class="custom-file-label text-truncate" for="inputPhoto">Choose profile picture</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" rows="3"  placeholder="Write about yourself" name="inputAbout" value="<?php if (isset($dataAuthor[0]['description'])){echo $dataAuthor[0]['description'];}?>"></textarea>
                            <small id="AboutAreaHelpBlock" class="form-text text-muted">
                                Your about description content must be less than 500 characters long.
                            </small>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--********** Profile edition End***********-->



<!--********** Contact edition **************-->
<div class="modal fade" id="ModalContactEdition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Contact information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" placeholder="E-mail" name="inputEmail" value="<?php if (isset($dataAuthor[0]['email'])){echo $dataAuthor[0]['email'];}?>" >
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone" name="inputPhone" value="<?php if (isset($dataAuthor[0]['contact'])){echo $dataAuthor[0]['contact'];}?>" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Facebook" name="inputFacebook" value="<?php if (isset($dataAuthor[0]['facebook'])){echo $dataAuthor[0]['facebook'];}?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Twitter" name="inputTwitter" value="<?php if (isset($dataAuthor[0]['twitter'])){echo $dataAuthor[0]['twitter'];}?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Youtube" name="inputYoutube" value="<?php if (isset($dataAuthor[0]['youtube'])){echo $dataAuthor[0]['youtube'];}?>">
                        </div>
                    </div>
                    <hr>

                    <div class="ModalControl">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="updateContact">Save changes</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
<!--********** Contact edition End***********-->









<!--Inclusion of the the JavaScript required files-->
<?php include('inc/js-bottom-inc.php');?>
</body>
</html>