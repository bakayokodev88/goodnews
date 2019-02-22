
<?php if (isset($_SESSION['errors'])): ?>
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


//First name valid ?
if (isset($_POST['inputFirstName']) || !preg_match('/^[a-z]+$/', $_POST['inputFirstName'])) {
$_SESSION['errors']['FirstName'] = "Enter a valid First Name [a-z,A-Z] ";
} else {
//In case of success we save the input
$_SESSION['account']['FirstName'] = $_POST['inputFirstName'];
}

//Last name valid ?
if (isset($_POST['inputLastName']) || !preg_match('/^[a-z]+$/', $_POST['inputLastName'])) {
$_SESSION['errors']['LastName'] = "Enter a valid last Name [a-z,A-Z] ";
} else {
//In case of success we save the input
$_SESSION['account']['LastName'] = $_POST['inputLastName'];
}

