
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

