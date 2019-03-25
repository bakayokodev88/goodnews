<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/14/2019
 * Time: 9:36 PM
 */

if (isset($_FILES) AND !empty($_FILES['avatar'])){
    //Function to upload the profile picture

    function uploadProfilePicture(){


        // Table to return in error case
        $errorUpload = array();
        unset($errorUpload);

        if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']) ){

            //Constants declaration for profile picture

            define('TARGET_PP', './../assets/authors/profiles'); // Target repertory
            define('MAX_SIZE_PP', 5242880);    // Max size in Octets of files
            define('WIDTH_MAX_PP', 128);      // Width max de l'image en pixels
            define('HEIGHT_MAX_PP', 128);    // Height max de l'image en pixels

            // Data table
            $extensions = array('jpg','png','jpeg','JPEG');    // Extension allowed


            //We collect the image extension
            $extension = strtolower(  substr(  strrchr($_FILES['avatar']['name'], '.')  ,1)  );
            if ( in_array($extension,$extensions) ){

                //We collect the profile picture size
                //Collection of image dimension
                $SizeImg = getimagesize($_FILES['avatar']['tmp_name']);
                echo $SizeImg;


                //We check the image dimension
                if ( ($SizeImg[0] <= WIDTH_MAX_PP)  && ($SizeImg[1] <= HEIGHT_MAX_PP) ) {

                    //We check the image size
                    if ($_FILES['avatar']['size'] <= MAX_SIZE_PP){

                        //We create an unique Id under what we will save the image
                        $uniqueName = md5(uniqid(rand(), true));
                        $avatarName = "{$uniqueName}.{$extension}";


                        //We check if the upload is successful
                        if(move_uploaded_file($_FILES['avatar']['tmp_name'], TARGET_PP.$avatarName)){

                            //We return the avatar name to save in a DataBase
                            return $avatarName;
                            echo  $avatarName;

                        } else{

                            $errorUpload = 4;
                            return $errorUpload;

                        }

                    }else{

                        $errorUpload = 3;
                        return $errorUpload;


                    }


                }else{
                    $errorUpload = 2;
                    return $errorUpload;

                }

            }else{
                $errorUpload = 1;
                return $errorUpload;

            }
        }




    }


}


