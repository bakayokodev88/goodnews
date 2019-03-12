
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

                <form action="#" method="post">

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
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!--********** Profile edition End***********-->



        <!--============ Modals for edition End ====================-->
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
                            <input type="email" class="form-control" placeholder="E-mail" name="inputEmail">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" placeholder="Phone" name="inputPhone">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Facebook" name="inputFacebook">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Twitter" name="inputTwitter">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" placeholder="Youtube" name="inputYoutube">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--********** Contact edition End***********-->

<!--============ Modals for edition End ====================-->

