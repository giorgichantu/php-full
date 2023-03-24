<?php
session_start();
include "conn.php";
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1; 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;  
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";?> <a href="index.php"> go </a><?php
} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_name =  $_FILES["fileToUpload"]["name"];
        $project_name = $_POST['project_name'];
        $content = $_POST['content'];
        $project_price = $_POST['project_price'];
        $floors_quantity = $_POST['floors_quantity'];
        $apartments_quantity = $_POST['apartments_quantity'];
        $office_quantity = $_POST['office_quantity'];
        $address = $_POST['address'];
        var_dump($project_name);
        var_dump($project_price);
        var_dump($content);
        var_dump($floors_quantity);
        var_dump($apartments_quantity);
        var_dump($office_quantity);
        var_dump($address);


        $sql = "INSERT INTO `starting_projects`(`project_name`, `content`, `project_price`,`floors_quantity`, `apartments_quantity`, `office_quantity `, `address `, `poster`, `starting_date `) 
                VALUES ('$project_name', '$content', '$project_price','$floors_quantity','$apartments_quantity','$office_quantity','$address', '$file_name' ,NULL)";
        $res = mysqli_query($con, $sql);
        if ($res) {
            ?><a href="posts.php">სახლე დაემატა</a> <?php
        }else{
            echo mysqli_error($con);
            ?><a href="add_p.php">სიახლე არ დაე</a> <?php

        }

    } 
    else {
        echo "Sorry, there was an error uploading your file.";?> <a href="index.php"> go </a><?php
    }
}
?>

