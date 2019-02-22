<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 12/25/2018
 * Time: 2:44 AM
 */

//We start the session
session_start();

require_once('config.php');


/*================ REGISTER FUNCTION ========================*/

//************** GET FUNCTION
//************** GET FUNCTION END

//************** POST FUNCTION

// Create new account from register page
//registration process
if (isset($_POST) && isset($_POST['register'])) {

    //First name control
    if (empty($_POST['inputFirstName'] || !preg_match('/^[a-z]+$/',$_POST['inputFirstName']))) {
        $_SESSION['errors']['FirstName'] = "Enter a valid First Name [a-z,A-Z] ";
        echo "Enter a valid First Name [a-z,A-Z]";
    } else {
        //case with success
        $_SESSION['account']['FirstName'] = $_POST['inputFirstName'];
    }
    //Last name control
    if (isset($_POST['inputLastName'])) {
        $_SESSION['errors']['LastName'] = "Enter a valid Last Name [a-z,A-Z] ";
    } else {
        //case with success
        $_SESSION['account']['LastName'] = $_POST['inputLastName'];
    }

    //Username control
    if (isset($_POST['inputUsername'])) {
        $_SESSION['errors']['username'] = "Username is required";
    } else {
        //We check if the username is unique
        $req = $db->prepare("SELECT id FROM authors WHERE username=?");
        $req->execute([$_POST['inputUsername']]);
        $user = $req->fetch();
        if ($user) {
            $_SESSION['errors']['username'] = "This Username is already taken";
        } else {
            //case with success
            $_SESSION['account']['username'] = $_POST['inputUsername'];

        }

    }
    //Control the email
    if (isset($_POST['inputEmail']) || !filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = "Enter a valid email";
    } else {
        //we check if the email address is unique
        $req = $db->prepare("SELECT id FROM authors WHERE email=?");
        $req->execute([$_POST['inputEmail']]);
        $user = $req->fetch();
        if ($user) {
            $_SESSION['errors']['email'] = "This email is already used for another account";
        } else {
            //case with success
            $_SESSION['account']['email'] = $_POST['inputEmail'];
        }
    }


    //control the password
    if (isset($_POST['inputPassword']) || $_POST['inputPassword'] != $_POST['inputPassword2']) {
        $_SESSION['errors']['password'] = "Enter a valid password";
    } else {
        $_SESSION['account']['password'] = $_POST['inputPassword'];
    }






}//End registration process


//Case where errors array is empty we can create a new account for the author
if (!isset($_SESSION['errors'])) {

    $req = $db->prepare("INSERT INTO authors SET firstName=?, lastName=?, email=?, login=?, password=?");
    $password = password_hash($_POST['inputPassword'], PASSWORD_BCRYPT);
    $req->execute([$_POST['inputFirstName'], $_POST['inputLastName'], $_POST['inputEmail'], $_POST['inputUsername'], $password]);
    header('Location: ../confirmation');
} else {
    //
    header('Location: ../register.php?auth=fail');
}


// Create new account from login page
if (isset($_POST['loginNewAccount'])) {
    session_destroy();
    header('Location: ../register');
}



//Cleaning form from register page
if (isset($_POST) && isset($_POST['Clean'])) {
    session_destroy();
    header('Location: ../register.php?success=true');
}





//************** POST FUNCTION END




/*================ REGISTER FUNCTION END ====================*/












/*===========================================================*/
/*================ LOGIN FUNCTION ========================*/
/*===========================================================*/




//************** GET FUNCTION

//************** GET FUNCTION END











//************** POST FUNCTION
if (isset($_POST['login'])){
    //We check the username

}
//************** POST FUNCTION END




/*================ LOGIN FUNCTION END ====================*/




