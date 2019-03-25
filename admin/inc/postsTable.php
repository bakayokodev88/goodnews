
<?php

    if (isset($_GET['search']) and !empty($_GET['search'])) {
        $q = htmlspecialchars($_GET['search']);
        //We call the function to operate the search function
        $dataPosts = searchArticle($q);
    }

    if (isset($_GET['category']) and !empty($_GET['category'])){
        $category = $_GET['category'];
        switch ($category){
            case "published":
                //We call the function to load all the publish article
                $dataPosts = loadPostsPublish();
                break;
            case "draft":
                //We call the function to load all the draft article
                $dataPosts = loadPostsDraft();
                break;
            case "disable":
                //We call the function to load all the disable article
                $dataPosts = loadPostsDisable();
                break;
            default :
                //We load all the personal information of the User
                $dataPosts = loadPosts();
                break;
        }
    }




?>


<div class="card shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <!-- Default dropright button -->
                <div class="btn-group dropright OptionControl">
                    <a class="btn singleActionBtn" href="new-post" role="button">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        New article
                    </a>
                </div>
            </div>
            <div class="col-sm-9">
                <form action="posts" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by article name..."
                               aria-label="Search by article name..." aria-describedby="button-addon4" name="search">
                        <div class="input-group-append" id="button-addon4">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <a class="btn btn-outline-secondary" href="posts" role="button">
                                Refresh
                            </a>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-sm-1 Table-control dropright d-flex justify-content-center "
                 style="padding-right: 0; padding-left: 0;">
                <a class="btn btn-default" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuLink">
                    <h6 class="dropdown-header">Sort by</h6>
                    <div class="dropdown-divider"></div>
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
        <hr>


        <?php if (count($dataPosts) == 0): ?>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="row justify-content-center">
                        <img src="../assets/system/img/failure_state_search.svg" style="height: 20%; width: 40%;">
                    </div>
                    <br><br>
                    <div class="row d-flex justify-content-center">

                        <h5 class="text-center">No result found.</h5>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <p class="text-center">try with a synonym or a more general keyword</p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="btn-group dropright OptionControl">
                            <a class="btn singleActionBtn" href="posts" role="button">
                                <i class="fas fa-redo-alt"></i>
                                Refresh
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>

        <?php endif; ?>


        <ul class="list-group list-group-flush">
            <?php foreach ($dataPosts as $data): ?>
                <a href="post?article=<?php echo $data['idPost'] ?>" class="list-group-item list-group-item-action Table-hover rounded">
                    <div class="row">
                        <div class="col-sm-10">
                            <p class="ArticleTitle font-weight-bold text-truncate"><?php echo $data['title'] ?></p>
                        </div>
                        <div class="col-sm-2">
                            <small class="text-muted float-right">Write on
                                <?php echo $var = date('F j, Y', strtotime($data['datePost'])); ?>
                            </small>
                        </div>
                    </div>

                </a>
            <?php endforeach; ?>
        </ul>
    </div>
</div>


<!--Modal Preview Article-->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Article overview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="../assets/ban1.jpg" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-sm-7">
                        <!--Text lenght should be specified to maintain the display-->
                        <p class="PostTitle text-justify font-weight-bold">Pulwama attack: Fear of retaliation spooks
                            Pakistan; troops put on alert, Air Force conducts combat patrols</p>
                        <small class="text-muted">Post on April 1, 2018</small>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p><i class="fas fa-inbox"></i>&nbsp;Category : <span class="">Apple</span></p>
                            <p><i class="fas fa-tag"></i>&nbsp;Status : <span class="badge badge-success">Active</span>
                            </p>
                            <p><i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments : <span
                                        class="">1369</span></p>
                            <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ContentOverflow">
                            <?php include('inc/lorem.php') ?>
                        </div>
                        <br>
                    </div>
                </div>
            </div>


            <div class="modal-footer">
                <div class="nav OptionControl justify-content-end">
                    <button type="button" class="btn btn-light">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        New
                    </button>
                    <button type="button" class="btn btn-light">
                        <i class="fas fa-edit"></i>&nbsp;
                        Edit
                    </button>
                    <a class="btn btn-light" href="#" role="button">
                        <i class="fas fa-trash"></i>&nbsp;
                        Delete
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Preview Article End-->

<br><br><br><br><br>