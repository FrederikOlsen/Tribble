<?php
session_start();
include("../storage.php");

$position = isset($_REQUEST['position']) ? $_REQUEST['position'] : "";

if ($position != '""') {
    $lng = ltrim(strtok($position, ','), $position[0]);
    $lat = substr(substr(strrchr($position, ','), ' 0', -1), 2);

    // Fetching location 
    $getLocation = 'SELECT * from Locations WHERE longitude = "' . $lng . '" AND latitude ="' . $lat . '"';
    $location = $mySQL->query($getLocation)->fetch_assoc();
    $locationID = $location["ID"];

    header('location: ../Pages/reservation.php?locationID=' . $locationID);
} else {
    header('location: ../Pages/error.php');
}
