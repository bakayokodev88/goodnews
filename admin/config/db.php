<?php
/**
 * Created by PhpStorm.
 * User: bakay
 * Date: 3/6/2019
 * Time: 5:18 AM
 */

// Connection to the database
try
{
    $db = new PDO('mysql:host=localhost;dbname=goodnews;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
