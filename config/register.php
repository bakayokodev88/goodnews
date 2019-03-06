<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 2/20/2019
 * Time: 12:33 PM
 */

//We start the session
session_start();


//Database connection
include ('config.php');

//We clean the form from old value
if (isset($_GET) && $_GET['clean']=true   ) {
    unset($_SESSION['account']);
    unset($_SESSION['errors']);
    header('Location: ../register');
}


//Registration process
if (isset($_POST) && isset($_POST['register'])) {

    //We clean the session var to make sure that we start from crash
    unset($_SESSION{'errors'});

    //First Name?
    if (isset($_POST['inputFirstName'])) {
        $_SESSION['account']['firstName'] = $_POST['inputFirstName'];
    }
    //Last Name?
    if (isset($_POST['inputLastName'])) {
        $_SESSION['account']['lastName'] = $_POST['inputLastName'];
    }
    //Is Username unique ?
    if (isset($_POST['inputUsername'])) {

        $req = $db->prepare("SELECT idAuthor FROM authors WHERE login=?");
        $req->execute([$_POST['inputUsername']]);
        $res = $req->fetch();
        if ($res){
            $_SESSION['errors']['username'] = "This username is already taken";
        }else{

            $_SESSION['account']['username'] = $_POST['inputUsername'];
        }
    }
    //Email ?
    if (isset($_POST['inputEmail'])) {

        $req = $db->prepare("SELECT idAuthor FROM authors WHERE email=?");
        $req->execute([$_POST['inputEmail']]);
        $res = $req->fetch();
        if ($res){
            $_SESSION['errors']['email'] = "This email is already taken";
        }else{
            $_SESSION['account']['email'] = $_POST['inputEmail'];
        }

    }
    //Password match ?
    if ($_POST['inputPassword'] != $_POST['inputPassword2']) {
        $_SESSION['errors']['password'] = "Password doesn't match";
    }else{
        $_SESSION['account']['password'] = $_POST['inputPassword2'];
    }



    //Registration
    if (empty($_SESSION['errors'])){

        //Case without errors
        $req = $db->prepare('INSERT INTO authors(firstName, lastName, email, login, password) 
                            VALUES(:firstName, :lastName, :email, :login,:password)');
        $req->execute(array(
            'firstName' => $_SESSION['account']['firstName'],
            'lastName' => $_SESSION['account']['lastName'],
            'email' => $_SESSION['account']['email'],
            'login' =>  $_SESSION['account']['username'],
            'password' => $_SESSION['account']['password']
        ));

        $req->closeCursor();

        //We unset the Account session
        unset($_SESSION['account']);
        unset($_SESSION['errors']);

        //We grant the access to the user
        $_SESSION['auth'] = true;

        //We select the new Id created for the user
        $response = $db->query('SELECT idAuthor FROM authors ORDER BY idAuthor DESC LIMIT 1');
        $authorId = $response->fetch();
        $_SESSION['authorId'] = $authorId;


        header('Location: ../confirmation');

    }else{


        //Case with errors
        header('Location: ../register.php?errors=true');
    }
}