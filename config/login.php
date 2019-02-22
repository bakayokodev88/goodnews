<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 2/20/2019
 * Time: 12:17 AM
 */


//We start the session
session_start();

require_once('config.php');


//************** GET FUNCTION
//************** GET FUNCTION END


//************** POST FUNCTION


/*Logging process from login page*/
if (isset($_POST) && isset($_POST['login'])) {

    //we check the user identity
    $req = $db->prepare("SELECT * FROM authors WHERE login = ? AND password = ?");
    $req->execute(array(
        $_POST['inputUsername'],
        $_POST['inputPassword']));
    $user = $req->fetch();
    if ($user) {
        //User exist in the database
        $_SESSION['auth'] = true;
        $_SESSION['author'] = $user;
        header('Location: ../admin');
    } else {
        //User doesn't exist
        header('Location: ../login.php?access=denied');
    }

}

//************** POST FUNCTION END