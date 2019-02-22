<?php
session_start();

// Deleting Session Variables
$_SESSION = array();
session_destroy();
//Case with errors
header('Location: ../login.php');
