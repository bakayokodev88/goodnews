<?php


// debug function outside

function debug($variable)
{
    echo '<pre>' . print_r($variable, true) . '</pre>';
}


// Connection to the database
try
{
    $db = new PDO('mysql:host=localhost;dbname=goodnews;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}