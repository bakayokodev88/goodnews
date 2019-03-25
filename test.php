
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




<?php if (isset($_GET['updateContactInformation'])): ?>
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div class="toast" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                your contact information has been updated.
            </div>
        </div>
    </div>
<?php endif;?>


