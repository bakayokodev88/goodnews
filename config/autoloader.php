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


//=============================================*/
//=============COMMENTS SECTION================*/
/*=============================================*/

//Function to create a new comment
/*=============================================*/

if ( isset($_POST) AND isset($_POST['postComment']) AND !empty($_POST['postComment']) ){

    // Connection to the database
    include('config.php');

    $idPost = htmlentities($_POST['postComment']);

    $req = $db->prepare('INSERT INTO comments(date, comment, email, firstName, lastName, idPost) 
                            VALUES(NOW(), :comment, :email, :firstName, :lastName, :idPost)');
    $req->execute(array(
        'comment' => htmlentities($_POST['inputComment']),
        'email' => htmlentities($_POST['inputEmail']),
        'firstName' => htmlentities($_POST['inputFirstName']),
        'lastName' => htmlentities($_POST['inputLastName']),
        'idPost' => $idPost
    ));

    $req->closeCursor();

    header("Location:../post.php?comment=posted&article=$idPost");

}
//Function to load Author data by Id from Post
/*=============================================*/
function loadAuthorData($id){

// Connection to the database
    include('config.php');

//Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM authors WHERE idAuthor="'.$id.'"');
    $req->execute();
    $dataAuthor = $req->fetchAll();

    $req->closeCursor();

    return $dataAuthor;
}
/*============ Load category data by Id END ==============*/


//Function to load comments by Id Post
/*=============================================*/
function loadCommentByPostId($id){

    // Connection to the database
    include('config.php');

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM comments WHERE  idPost="'.$id.'" ORDER BY date DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load a specific post data based on Id END ==============*/


//Function to load Author Total post
/*=============================================*/
function loadAuthorPostsTotal($id){

    // Connection to the database
    include('config.php');

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE posts.idAuthor="'.$id.'" ');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load Author Total post END ==============*/


//Function to load Author Total Comments
/*=============================================*/
function loadAuthorTotalComment($id){

    // Connection to the database
    include('config.php');

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT DISTINCT comments.* FROM comments, posts, authors WHERE comments.idPost = posts.idPost AND posts.idAuthor = "'.$id.'"  ');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ load Author Total post END ==============*/


