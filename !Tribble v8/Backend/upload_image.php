<?php
require '../Pages/signup.php';

function validateImage($image_file)
{
    $uploadstatus = true;
    $path = "../Assets/Img/Profiles/" . basename($image_file["name"]);
    $fileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    //check if file is an image
    if (getimagesize($image_file["tmp_name"]) == false) $uploadstatus = false;

    //check if file already exists
    if (file_exists($path)) $uploadstatus = false;

    //check file size
    if ($image_file["size"] > 1000000) $uploadstatus = false;

    //check file format
    if ($fileType != "jpg" && $fileType != "png") {
        $uploadstatus = false;
    }

    return $uploadstatus;
}


function pressed($image_file)
{
    if (validateImage($image_file)) {
        echo "test";
    }
}
