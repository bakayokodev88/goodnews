
value="<?php if (isset($_SESSION['account']) && isset($_SESSION['account']['LastName'])) {
    echo $_SESSION['account']['LastName'];
} ?>"


<?php if (empty($_SESSION['errors'])): ?>
    <div class="alert alert-dismissible alert-danger AlertErrorRegistration" role="alert">
        <h4 class="alert-heading">You have not filled the form correctly</h4>
        <hr>
        <?php foreach ($_SESSION['errors'] as $error): ?>
            <ul>
                <li><?= $error; ?></li>
            </ul>
        <?php endforeach; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>





<?php

$req = $db->prepare("SELECT idAuthor FROM authors WHERE email=?");
$req->execute([$_POST['inputEmail']]);
$res = $req->fetch();
if ($res){
$_SESSION['errors']['email'] = "This email is already taken";
}else{
$_SESSION['account']['email'] = $_POST['inputEmail'];
}

?>


<div class="card">
    <div class="card-body">
        <h5 class="card-title">Article test 2</h5>
        <hr>
        <ul class="list-group list-group-flush">
            <li class="list-group-item Table-hover rounded">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="Category font-weight-bold">Category</p>
                            </div>
                            <div class="col-sm-6">
                                <small class="text-muted float-right">Write on April 1, 2018</small>
                            </div>
                        </div>
                        <p class="ArticleTitle font-weight-bold text-truncate">Article Title</p>
                        <p class="CommentItself text-truncate" style="margin-bottom: 0;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet atque aut beatae corporis delectus deserunt, doloremque fugiat fugit itaque nisi nulla omnis possimus quas quia quo repellendus repudiandae rerum voluptatem.
                        </p>
                    </div>
                    <div class="col-sm-1 Table-control d-flex align-items-center">
                        <div class="dropdown dropdown-menu-sm-right">
                            <a class="btn btn-default " href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="view-post">
                                    <i class="far fa-folder-open"></i>
                                    &nbsp; View
                                </a>
                                <a class="dropdown-item" href="edit-post">
                                    <i class="far fa-edit"></i>
                                    &nbsp; Edit
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ModalDeletePost">
                                    <i class="far fa-trash-alt"></i>
                                    &nbsp; Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<br><br><br><br><br>