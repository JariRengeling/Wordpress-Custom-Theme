<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include('config.php');
    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if($imgFile)
    {
        $upload_dir = 'user_images/'; // upload directory   
        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $userpic = rand(1000,1000000).".".$imgExt;
        if(in_array($imgExt, $valid_extensions))
        {           
            if($imgSize < 5000000)
            {
                unlink($upload_dir.$edit_row['opzoekImage']);
                move_uploaded_file($tmp_dir,$upload_dir.$userpic);
            }
            else
            {
                $errMSG = "Sorry, your file is too large it should be less then 5MB";
            }
        }
        else
        {
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
        }   
    }
    else
    {
        $userpic = $edit_row['opzoekImage']; // old image from database
    }
?>