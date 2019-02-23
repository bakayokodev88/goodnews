<?php
session_start();

// Deleting Session Variables
$_SESSION = array();

session_destroy();
header('Location: ../../');
