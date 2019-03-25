<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/5/2019
 * Time: 9:18 PM
 */


/*================================================================*/
/******************************************************************/
/*=========================== New Post ===========================*/


/******************************************************************/
/* !important note regarding the article status                   */
/* 1 = Active / publish                                           */
/* 2 = Draft                                                      */
/* 2 = Disable                                                    */
/******************************************************************/


//Function to load Category data for the new form
/*=============================================*/
function loadCategoryPost(){

    // Connection to the database
    include('db.php');

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
function loadCategoryById($id){

    $id = $id;

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT name FROM category WHERE idCategory = "'.$id.'"    ');
    $req->execute();
    $dataCategory = $req->fetchAll();

    $req->closeCursor();

    return $dataCategory;
}
/*============ Load category END ==============*/


//Function to load all the post from the database
/*=============================================*/
function loadPosts(){

    // Connection to the database
    include('db.php');


    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ Load category END ==============*/

//Function to load 5 last Recent Post
/*=============================================*/
function load5LastPosts(){

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare("SELECT title FROM posts ORDER BY idPost DESC LIMIT 5");
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ Load category END ==============*/

//Function to load all the  published article from the database
/*=============================================*/
function loadPostsPublish(){

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=1 AND idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC ');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ Load Published Post END ==============*/

//Function to load all the  draft article from the database
/*=============================================*/
function loadPostsDraft(){

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=2 AND idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ Load Draft Post END ==============*/

//Function to load all the  draft article from the database
/*=============================================*/
function loadPostsDisable(){

    // Connection to the database
    include('db.php');

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE status=3 AND  idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC');
    $req->execute();
    $dataPosts = $req->fetchAll();

    $req->closeCursor();

    return $dataPosts;
}
/*============ Load Disable Post END ==============*/


//Function to search article from the database
/*=============================================*/
function searchArticle($search){

    // Connection to the database
    include('db.php');

    $search= $search;

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE title LIKE "%'.$search.'%" AND  idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC ');
    $req->execute();
    $dataSearch = $req->fetchAll();

    $req->closeCursor();

    return $dataSearch;
}

/*=============================================*/

//Function to search article from the database
/*=============================================*/
function loadArticleById($id){

    // Connection to the database
    include('db.php');

    $id= $id;

    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM posts WHERE posts.idPost= "'.$id.'" AND WHERE idAuthor="'.$_SESSION['author']['idAuthor'].'" ORDER BY idPost DESC ');
    $req->execute();
    $dataSearch = $req->fetchAll();

    $req->closeCursor();

    return $dataSearch;
}

/*=============================================*/

//Create new article and publish it
/*=============================================*/
if (isset($_POST) && isset($_POST['publish'])){ //if the publish option control has ben selected

    session_start();

    //We collect the Author Id
    $idAuthor = $_SESSION['author']['idAuthor'];

    // Connection to the database
    include('db.php');

    $errorPublish = null;

    //Constants declaration for article cover image
    define('TARGET_PP', '../../assets/authors/posts/'); // Target repertory
    define('MAX_SIZE', 5242880);    // Max size in Octets of files
    define('WIDTH_MIN', 1000);      // Width max de l'image en pixels
    define('HEIGHT_MIN', 500);    // Height max de l'image en pixels

    //Array of allowed extension
    $extensions = array('jpg','jpeg','JPEG','JPG');    // Extension allowed


    //We retrieve the article cover image extension
    $extension = strtolower(  substr(  strrchr($_FILES['inputCover']['name'], '.')  ,1)  );
    if ( in_array($extension,$extensions) ){

        //We collect the article cover image size
        //Collection of image dimension
        $SizeImg = getimagesize($_FILES['inputCover']['tmp_name']);

        //We check the image dimension
        if ( ($SizeImg[0] >= WIDTH_MIN)  && ($SizeImg[1] >= HEIGHT_MIN) ) {

            //We check of the new article category have been selected
            if (!is_int($_POST['inputCategory'])){

                //We check the image size
                if ($_FILES['inputCover']['size'] <= MAX_SIZE){

                    //We create an unique Id Code under what we will save the image
                    $uniqueName = md5(uniqid(rand(), true));
                    $coverName = "{$uniqueName}.{$extension}";

                    //We check if the upload is successful
                    if(move_uploaded_file($_FILES['inputCover']['tmp_name'], TARGET_PP.$coverName)){


                        $req = $db->prepare('INSERT INTO posts(datePost, title, cover, status, content, idAuthor, idCategory) 
                            VALUES(NOW(), :title, :cover, :status,:content, :idAuthor, :idCategory)');
                        $req->execute(array(
                            'title' => $_POST['inputTitle'],
                            'cover' => $coverName,
                            'status' => 1,  // 1 is the variable for Publishing an article
                            'content' => $_POST['inputContent'],
                            'idAuthor' => $idAuthor,
                            'idCategory' => $_POST['inputCategory']
                        ));

                            $req->closeCursor();

                        header("Location:../posts.php?success=true");

                    }else{

                        //We save article input information in a session
                        $_SESSION['article']['inputTitle'] = $_POST['inputTitle'];
                        $_SESSION['article']['inputContent'] = $_POST['inputContent'];

                        //We throw an error coz the file hasn't been moved properly
                        $errorPublish = 5;
                        header("Location:../new-post.php?publish=fail&errorPublish=$errorPublish");
                    }

                }else{
                    //We save article input information in a session
                    $_SESSION['article']['inputTitle'] = $_POST['inputTitle'];
                    $_SESSION['article']['inputContent'] = $_POST['inputContent'];

                    //We throw an error coz the file size should be less than 5 Mo
                    $errorPublish = 4;
                    header("Location:../new-post.php?publish=fail&errorPublish=$errorPublish");
                }

            }else{
                //We save article input information in a session
                $_SESSION['article']['inputTitle'] = $_POST['inputTitle'];
                $_SESSION['article']['inputContent'] = $_POST['inputContent'];

                //We throw an error coz the article category is not specified
                $errorPublish = 3;
                header("Location:../new-post.php?publish=fail&errorPublish=$errorPublish");
            }


        }else{

            //We save article input information in a session
            $_SESSION['article']['inputTitle'] = $_POST['inputTitle'];
            $_SESSION['article']['inputContent'] = $_POST['inputContent'];

            //We throw an error coz the file dimension is not greater than 1200*600
            $errorPublish = 2;
            header("Location:../new-post.php?publish=fail&errorPublish=$errorPublish");
        }

    }else{

        //We save article input information in a session
        $_SESSION['article']['inputTitle'] = $_POST['inputTitle'];
        $_SESSION['article']['inputContent'] = $_POST['inputContent'];

        //We throw an error coz the file extension is not allowed
        $errorPublish = 1;
        header("Location:../new-post.php?publish=fail&errorPublish=$errorPublish");
    }



}


/*=========================== New Post END ========================*/



//Clear Article redaction form
/*=============================================*/
if (isset($_GET) && isset($_GET['clearform'])){ //if the publish option control has ben selected
    session_start();

    unset($_POST);
    unset($_SESSION['article']);

   header("Location:../new-post");

}

/*=========================== Cancel Article edition END ========================*/