<?php
session_start();
include("../storage.php");
require __DIR__ . './upload_image.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

if ($action == 'signOut') {
    $_SESSION["token"] = null;
    header('location: ../Pages/login.php');
} else {
    header('location: ../Pages/login.php');
}
