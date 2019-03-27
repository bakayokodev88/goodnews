<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/25/2019
 * Time: 6:30 PM
 */

session_start();


//Function to load article data
/*=============================================*/
function loadPosts(){

    // Connection to the database
    include('config.php');


    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=1  ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load article data END ==============*/

//Function to load a specific post data based on Id
/*=============================================*/
function loadPostById($id){

    // Connection to the database
    include('config.php');


    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=1 AND idPost="'.$id.'" ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load a specific post data based on Id END ==============*/
//Function to load a specific post data based on Id
/*=============================================*/
function loadPostByCategoryId($id){

    // Connection to the database
    include('config.php');

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=1 AND idCategory="'.$id.'" ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load a specific post data based on Id END ==============*/

//Function to load set of article for pagination
/*=============================================*/
function loadPostsPagination($start,$postPerPage){

    // Connection to the database
    include('config.php');

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=1  ORDER BY idPost DESC LIMIT '.$start.','.$postPerPage);
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ set of article for pagination END ==============*/

//Function to load Category data for the new form
/*=============================================*/
function loadCategoryPost(){

// Connection to the database
    include('config.php');

//Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare("SELECT idCategory,name FROM category");
    $req->execute();
    $dataCategory = $req->fetchAll();

    $req->closeCursor();

    return $dataCategory;
}
/*============ Load category END ==============*/

//Function to load Category data by Id
/*=============================================*/
function loadCategoryByIdPost($id){

// Connection to the database
    include('config.php');

//Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM category WHERE idCategory="'.$id.'"');
    $req->execute();
    $dataCategory = $req->fetchAll();

    $req->closeCursor();

    return $dataCategory;
}
/*============ Load category data by Id END ==============*/

