<?php

session_start();
session_destroy();

$_SESSION['loggedIn'] = false;
header("Location: index.php");

$_SESSION['authenticated'] = false;
//header('location: indx.php');

?>