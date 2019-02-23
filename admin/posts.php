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
                            <li class="breadcrumb-item active" aria-current="page">Article</li>
                        </ol>
                    </nav>
                </div>
                <!--Breadcrumb End-->

                <div class="row Title">
                    <div class="col-sm-6">
                        <h1>Articles tables</h1>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                            ipsam neque nihil officiis quae quaerat, veritatis voluptate. Atque, blanditiis dolores
                            ducimus exercitationem fugit, illum incidunt perspiciatis quam reprehenderit soluta,
                            suscipit.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row justify-content-end">
                            <img src="../assets/system/img/subscriptions.png" class=" Page-illustration img-fluid"
                                 width="400" height="200" alt="">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row RowControl">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">
                            <div class="row  justify-content-end">
                                <div class="nav OptionControl">
                                    <button type="button" class="btn btn-light">
                                        <i class="fas fa-file-alt"></i>&nbsp;
                                        New article
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <i class="far fa-file"></i>&nbsp;
                                        New article
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="row rowTable">
                        <table class="table ArticleTable">
                            <thead>
                            <tr>
                                <th scope="col">Status</th>
                                <th scope="col">Category</th>
                                <th scope="col">Title</th>
                                <th scope="col">Operation</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td>Otto</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                                <td class="Table-control">
                                    <div class="dropdown">
                                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="view-post">
                                                <i class="far fa-folder-open"></i>
                                                &nbsp; View
                                            </a>
                                            <a class="dropdown-item" href="edit-post">
                                                <i class="far fa-edit"></i>
                                                &nbsp; Edit
                                            </a>
                                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#ModalDeletePost">
                                                <i class="far fa-trash-alt"></i>
                                                &nbsp; Delete
                                            </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-primary">Draft</span>
                                </td>
                                <td>Otto</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                                <td class="Table-control">
                                    <div class="dropdown">
                                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="view-post">
                                                <i class="far fa-folder-open"></i>
                                                &nbsp; View
                                            </a>
                                            <a class="dropdown-item" href="edit-post">
                                                <i class="far fa-edit"></i>
                                                &nbsp; Edit
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="far fa-trash-alt"></i>
                                                &nbsp; Delete
                                            </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-secondary">Disabled</span>
                                </td>
                                <td>Otto</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</td>
                                <td class="Table-control">
                                    <div class="dropdown">
                                        <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="view-post">
                                                <i class="far fa-folder-open"></i>
                                                &nbsp; View
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="far fa-edit"></i>
                                                &nbsp; Edit
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="far fa-trash-alt"></i>
                                                &nbsp; Delete
                                            </a>
                                        </div>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        </div>


        <!--Modal to delete post-->

        <!-- Modal -->
        <div class="modal fade" id="ModalDeletePost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Delete post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal to delete post End-->
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