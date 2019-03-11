
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <!-- Default dropright button -->
                <div class="btn-group dropright OptionControl">
                    <a class="btn singleActionBtn" href="new-post" role="button">
                        <i class="fas fa-file-alt"></i>&nbsp;
                        New article
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group" style="margin-bottom: 0">
                    <div class="row">
                        <div class="col-sm-11" style="padding-right: 0;">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search here..." aria-label="Search an article" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline" type="button" id="button-addon2">
                                        <i class="fas fa-redo"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 Table-control dropright d-flex justify-content-center " style="padding-right: 0; padding-left: 0;">

                            <a class="btn btn-default" href="#" role="button" id="dropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuLink">
                                <h6 class="dropdown-header">Sort by</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-export"></i>&nbsp;&nbsp;Publish / Active
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-signature"></i>&nbsp;&nbsp;Draft
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-ban"></i>&nbsp;&nbsp;Disable
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <ul class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action Table-hover rounded" data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="row">
                    <div class="col-sm-10">
                        <p class="ArticleTitle font-weight-bold text-truncate">Article Title</p>
                    </div>
                    <div class="col-sm-2">
                        <small class="text-muted float-right">Write on April 1, 2018</small>
                    </div>
                </div>
                <p class="CommentItself text-truncate" style="margin-bottom: 0;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut beatae corporis delectus deserunt, doloremque fugiat fugit itaque nisi nulla omnis possimus quas quia quo repellendus repudiandae rerum voluptatem.
                </p>
            </a>
            <a href="#" class="list-group-item list-group-item-action Table-hover rounded" data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="row">
                    <div class="col-sm-10">
                        <p class="ArticleTitle font-weight-bold text-truncate">Article Title</p>
                    </div>
                    <div class="col-sm-2">
                        <small class="text-muted float-right">Write on April 1, 2018</small>
                    </div>
                </div>
                <p class="CommentItself text-truncate" style="margin-bottom: 0;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut beatae corporis delectus deserunt, doloremque fugiat fugit itaque nisi nulla omnis possimus quas quia quo repellendus repudiandae rerum voluptatem.
                </p>
            </a>
            <a href="#" class="list-group-item list-group-item-action Table-hover rounded" data-toggle="modal" data-target=".bd-example-modal-xl">
                <div class="row">
                    <div class="col-sm-10">
                        <p class="ArticleTitle font-weight-bold text-truncate">Article Title</p>
                    </div>
                    <div class="col-sm-2">
                        <small class="text-muted float-right">Write on April 1, 2018</small>
                    </div>
                </div>
                <p class="CommentItself text-truncate" style="margin-bottom: 0;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut beatae corporis delectus deserunt, doloremque fugiat fugit itaque nisi nulla omnis possimus quas quia quo repellendus repudiandae rerum voluptatem.
                </p>
            </a>
        </ul>
    </div>
</div>







<!--Modal Preview Article-->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                        <p class="PostTitle text-justify font-weight-bold">Pulwama attack: Fear of retaliation spooks Pakistan; troops put on alert, Air Force conducts combat patrols</p>
                        <small class="text-muted">Post on April 1, 2018</small>
                        <br>
                        <div class="d-flex justify-content-between">
                            <p><i class="fas fa-inbox"></i>&nbsp;Category : <span class="">Apple</span></p>
                            <p><i class="fas fa-tag"></i>&nbsp;Status : <span class="badge badge-success">Active</span></p>
                            <p><i class="fas fa-comment-alt text-secondary"></i>&nbsp;Comments : <span class="">1369</span></p>
                            <p><i class="fas fa-heart text-danger"></i>&nbsp;Like : <span class="">1369</span></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ContentOverflow">
                            <?php include ('inc/lorem.php')?>
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
                    <button type="button" class="btn btn-light">
                        <i class="fas fa-trash"></i>&nbsp;
                        Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Preview Article End-->

<br><br><br><br><br>