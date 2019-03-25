<?php

//We start the session
session_start();

include('config/police.php');
include('../config/config.php');
include ('config/functions-posts.php');
include ('config/function-personal-information.php');

$idAuthor = $_SESSION['author']['idAuthor'];

//We load all the personal information of the User
$dataAuthor = loadPersonalInformationData();

//We load all the personal information of the User
$dataPosts = loadPosts();





?>/