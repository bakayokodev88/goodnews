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



/*================= Update Profile Information ======================*/
if (isset($_POST) && isset($_POST['updateProfile'])){

    session_start();

    //We collect the Author Id
    $idAuthor = $_SESSION['author']['idAuthor'];

    // Connection to the database
    include('db.php');

    $errorUpload = null;

    //We check if a file has been uploaded if yes, we process it and upload it then keep on Updating the profile information.
    if (isset($_FILES) AND !empty($_FILES['avatar']['name'])){

        //Constants declaration for profile picture
        define('TARGET_PP', '../../assets/authors/profiles/'); // Target repertory
        define('MAX_SIZE_PP', 5242880);    // Max size in Octets of files
        define('WIDTH_MAX_PP', 400);      // Width max de l'image en pixels
        define('HEIGHT_MAX_PP', 400);    // Height max de l'image en pixels

        //Array of allowed extension
        $extensions = array('jpg','png','jpeg','JPEG');    // Extension allowed

        //We retrieve the avatar extension
        $extension = strtolower(  substr(  strrchr($_FILES['avatar']['name'], '.')  ,1)  );
        if ( in_array($extension,$extensions) ){

            //We collect the profile picture size
            //Collection of image dimension
            $SizeImg = getimagesize($_FILES['avatar']['tmp_name']);

            //We check the image dimension
            if ( ($SizeImg[0] <= WIDTH_MAX_PP)  && ($SizeImg[1] <= HEIGHT_MAX_PP) ) {

                //We check the image size
                if ($_FILES['avatar']['size'] <= MAX_SIZE_PP){

                    //We create an unique Id under what we will save the image
                    $uniqueName = md5(uniqid(rand(), true));
                    $avatarName = "{$uniqueName}.{$extension}";

                    //We check if the upload is successful
                    if(move_uploaded_file($_FILES['avatar']['tmp_name'], TARGET_PP.$avatarName)){

                        //We check the value of about
                        if (empty(trim($_POST['inputAbout']))){
                            $_POST['inputAbout']= Null;
                        }


                        $req = $db->prepare('UPDATE authors SET firstName = :firstName, lastName = :lastName, description = :description, photo = :photo WHERE idAuthor = :idAuthor');
                        $req->execute(array(
                            'firstName' => $_POST['inputFirstName'],
                            'lastName' => $_POST['inputLastName'],
                            'description' => $_POST['inputAbout'],
                            'photo' => $avatarName,
                            'idAuthor'=> $idAuthor
                        ));

                        $req->closeCursor();

                        header("Location:../personal-informations.php?updateProfileInformation=success888");



                    }else{
                        //We throw an error coz the file hasn't been moved properly
                        $errorUpload = 4;
                        header("Location:../personal-informations.php?updateProfileInformation=fail&errorUpload=$errorUpload");
                    }

                }else{
                    //We throw an error coz the file size should be less than 5 Mo
                    $errorUpload = 3;
                    header("Location:../personal-informations.php?updateProfileInformation=fail&errorUpload=$errorUpload");
                }

            }else{
                //We throw an error coz the file dimension is not 400*400
                $errorUpload = 2;
                header("Location:../personal-informations.php?updateProfileInformation=fail&errorUpload=$errorUpload");
            }

        }else{

            //We throw an error coz the file extension is not allowed
            $errorUpload = 1;
            header("Location:../personal-informations.php?updateProfileInformation=fail&errorUpload=$errorUpload");

        }

    }else{ // Case where no image has been uploaded

        //We check the value of about
        if (empty(trim($_POST['inputAbout']))){
            $_POST['inputAbout']= Null;
        }

        $req = $db->prepare('UPDATE authors SET firstName = :firstName, lastName = :lastName, description = :description WHERE idAuthor = :idAuthor');
        $req->execute(array(
            'firstName' => $_POST['inputFirstName'],
            'lastName' => $_POST['inputLastName'],
            'description' => $_POST['inputAbout'],
            'idAuthor'=> $idAuthor
        ));

        $req->closeCursor();

        header("Location:../personal-informations.php?updateProfileInformation=success888");
    }


}
/*================= Update Profile Information End ======================*/


/*================= Update Contact Information ======================*/
if (isset($_POST) && isset($_POST['updateContact'])){

    session_start();

    //We collect the Author Id
    $idAuthor = $_SESSION['author']['idAuthor'];

    // Connection to the database
    include('db.php');

    $req = $db->prepare('UPDATE authors SET email = :email, contact = :contact, facebook = :facebook, twitter = :twitter, youtube = :youtube WHERE idAuthor = :idAuthor');
    $req->execute(array(
        'email' => $_POST['inputEmail'],
        'contact' => $_POST['inputPhone'],
        'facebook' => $_POST['inputFacebook'],
        'twitter' => $_POST['inputTwitter'],
        'youtube' => $_POST['inputYoutube'],
        'idAuthor'=> $idAuthor
    ));

    $req->closeCursor();

    header("Location:../personal-informations.php?updateContactInformation=success ");



}
/*================= Update Contact Information End ======================*/



/*================= Update Username Information ======================*/
if (isset($_POST) && isset($_POST['updateUsername'])){

    session_start();

    // Connection to the database
    include('db.php');

    //We collect the Author Id
    $idAuthor = $_SESSION['author']['idAuthor'];

    //We check if the provided username is unique
    $providedUsername = htmlentities($_POST['inputUsername']);

    /** @var TYPE_NAME $db */
    $req = $db->prepare('SELECT * FROM authors WHERE login= "'.$providedUsername.'"  ');
    $req->execute();
    $dataSearch = $req->fetchAll();

    //We close the queries
    $req->closeCursor();

    //We count the number of result
    $result = count($dataSearch);

    if ($result >= 1 ){

        //We throw an error coz the username is already taken
        header("Location:../security.php?updateUsername=failed&code=1");
    }else{

        //We check the Username conformity
        $inputUsername1 = htmlentities($_POST['inputUsername']);
        $inputUsername2 = htmlentities($_POST['inputUsername2']);

        if ($inputUsername1 == $inputUsername2){

            //We update the username of the author
            $req = $db->prepare('UPDATE authors SET login = :username  WHERE idAuthor = :idAuthor');
            $req->execute(array(
                'username' => $inputUsername1,
                'idAuthor'=> $idAuthor
            ));

            //We close the queries
            $req->closeCursor();

            //We throw a success for the update
            header("Location:../security.php?updateUsername=success");

        }else{
            //We throw an error coz the username do not respect the conformity
            header("Location:../security.php?updateUsername=failed&code=2");
        }


    }




}
/*================= Update Username Information End ======================*/

/*================= Update Password Information ======================*/
if (isset($_POST) && isset($_POST['updatePassword'])){

    session_start();

    // Connection to the database
    include('db.php');

    //We collect the Author Id
    $idAuthor = $_SESSION['author']['idAuthor'];

    //We collect the Author old password from the database
    /** @var TYPE_NAME $db */
    $req = $db->prepare("SELECT password  FROM authors WHERE idAuthor = $idAuthor");
    $req->execute();
    $passwordRetrieved = $req->fetchAll();

    //We close the queries
    $req->closeCursor();


    //We check if the provided password match with the one from our database
    $providedPassword = htmlentities($_POST['inputCurrentPassword']);

    if ($providedPassword == $passwordRetrieved[0]['password'] ){

        //We check the password conformity
        $inputPassword = htmlentities($_POST['inputPassword']);
        $inputPasswordConfirm = htmlentities($_POST['inputPassword2']);

        if ($inputPassword == $inputPasswordConfirm ){
            //We update the password of the author
            $req = $db->prepare('UPDATE authors SET password = :password  WHERE idAuthor = :idAuthor');
            $req->execute(array(
                'password' => $inputPassword,
                'idAuthor'=> $idAuthor
            ));

            //We close the queries
            $req->closeCursor();

            //We throw a success for the update
            header("Location:../security.php?updatePassword=success");

        }else{
            //We throw an error coz the new password doesn't match the conformity
            header("Location:../security.php?updatePassword=error&code=2");
        }

    }else{
        //We throw an error coz the provided mater password doesn't match
        header("Location:../security.php?updatePassword=error&code=1");
    }

}
/*================= Update Password Information End ======================*/

