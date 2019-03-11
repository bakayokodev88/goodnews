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





//Create new article and publish it
/*=============================================*/
if (isset($_POST['publish'])){ //if the publish option control has ben selected

    // Connection to the database
    include('db.php');
    session_start();

    $newFormData = array();
    $errorPost = array();


    //We check the input Title
    if (isset($_POST['inputTitle'])){
        $newFormData['inputTitle'] = $_POST['inputTitle'];
    }

    //We check the category
    if (isset($_POST['inputCategory'])){
        $newFormData['inputCategory'] = $_POST['inputCategory'];
    }else{
        $errorPost['inputCategory'] = "Category is required";
    }















    //We check the cover Image
    if (isset($_POST['inputCover'])){


        //Constants
        define('TARGET', '../../assets/posts/'); // Target repertory
        define('MAX_SIZE', 5242880);    // Max size in Octets of files
        define('WIDTH_MIN', 600);      // Minimum Width in pixel acceptable to upload the cover
        define('HEIGHT_MIN', 300);    // Minimum Height in pixel acceptable to upload the cover


        // Data table
        $extensions = array('jpg','jpeg','JPEG','JPG');    // Extension allowed

        //This variable will collect all the eventual errors regarding the cover image
        $ErrorImg = array();

        /************************************************************
         * Creation du repertoire cible si inexistant
         *************************************************************/
        if( !is_dir(TARGET) ) {
            if( !mkdir(TARGET, 0755) ) {
                exit('Erreur : the target directory can not be created! Check that you have sufficient rights to do it or create it manually!');
            }
        }

        // Recuperation de l'extension du fichier
        $extension = strtolower(  substr(  strrchr($_FILES['inputCover']['name'], '.')  ,1)  );
        if ( in_array($extension,$extensions) ){
            //Collection of image dimension
            $SizeImg = getimagesize($_FILES['avatar']['tmp_name']);

            //we check the dimensions of the image
            if ( ($SizeImg[0] <= 500)  && ($SizeImg[1] <= 500) ) {

            }else{
                //On affiche une erreur
                $ErrorImg = "Erreur, la dimension de votre avatar doit être inférieur à 400 x 400";
            }




        }else {

            //We print an error
            $ErrorImg = "Error, allowed extensions are jpg, jpeg, JPG and JPEG";

        }







        $newFormData['inputCover'] = $_POST['inputCover'];
    }else{
        $errorPost['inputCover'] = "";
    }





























    //We retrieve the author Id
    $idAuthor = $_SESSION['author']['idAuthor'];


    //If there's no error and all the fields have been filled correctly
    if (empty($errorPost)){
        $req = $db->prepare('INSERT INTO posts(datePost, title, cover, status, content, idAuthor, idCategory) 
                            VALUES(NOW(), :title, :cover, :status,:content, :idAuthor, :idCategory)');
        $req->execute(array(
            'title' => $_POST['inputTitle'],
            'cover' => "Test",
            'status' =>  1,  // 1 is the variable for Publishing an article
            'content' => $_POST['inputContent'],
            'idAuthor' => $idAuthor,
            'idCategory' => $_POST['inputCategory']
        ));

        $req->closeCursor();

        echo 'Article save with success!';


    }else{
        //We send back a message to the author with the occurred error
        header('Location: ../new-post.php?error=true');

    }






}


/*=========================== New Post END ========================*/