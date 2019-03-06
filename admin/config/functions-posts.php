<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/5/2019
 * Time: 9:18 PM
 */
session_start();

/*================================================================*/
/******************************************************************/
/*=========================== New Post ===========================*/


/******************************************************************/
/* !important note regarding the article status                   */
/* 1 = Draft                                                      */
/* 2 = Active / publish                                           */
/* 2 = Disable                                                    */
/******************************************************************/


//Function to load Category data for the new form
/*=============================================*/
function loadCategoryPost(){

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare("SELECT idCategory,name  FROM category");
    $req->execute();
    $dataCategory = $req->fetchAll();

    $req->closeCursor();

    return $dataCategory;
}


//Form for new article
/*=============================================*/
if (isset($_POST['publish'])){ //if the publish option control has ben selected

    // Connection to the database
    include('db.php');

    $newFormData = array();


    //We check the input Title
    if (isset($_POST['inputTitle'])){
        $newFormData['inputTitle'] = $_POST['inputTitle'];
    }

    //We check the category
    if (isset($_POST['inputCategory'])){
        $newFormData['inputCategory'] = $_POST['inputCategory'];
    }


    //We retrieve the author Id
    $idAuthor = $_SESSION['author']['idAuthor'];



    $req = $db->prepare('INSERT INTO posts(datePost, title, cover, status, content, idAuthor, idCategory) 
                            VALUES(NOW(), :title, :cover, :status,:content, :idAuthor, :idCategory)');
    $req->execute(array(
        'datePost' => NOW(),
        'title' => $_SESSION['account']['lastName'],
        'cover' => $_SESSION['account']['email'],
        'status' =>  $_SESSION['account']['username'],
        'content' => $_SESSION['account']['password'],
        'idAuthor' => $_SESSION['account']['password'],
        'idCategory' => $_SESSION['account']['password']
    ));

    $req->closeCursor();






}


/*=========================== New Post END ========================*/