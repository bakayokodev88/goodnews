<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/12/2019
 * Time: 9:45 AM
 */

/*=================Load Personal Information Data ==============*/
function loadPersonalInformationData(){

    // Connection to the database
    include('db.php');


    $idAuthor = $_SESSION['author']['idAuthor'];


    //Request to select the Category data from the DB
    /** @var TYPE_NAME $db */
    $req = $db->prepare("SELECT *  FROM authors WHERE idAuthor = $idAuthor");
    $req->execute();
    $dataPersonalInformation = $req->fetchAll();

    $req->closeCursor();



    return $dataPersonalInformation;
}

/*=================Load Personal Information Data End==============*/

/*================= Update Contact Information ======================*/
if (isset($_POST) && isset($_POST['updateContact'])){





}
/*================= Update Contact Information End ======================*/

