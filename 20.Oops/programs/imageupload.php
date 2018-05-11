<?php
$target_dir = "C:/xampp/htdocs/PhpProject1/20.Oops/programs/images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".","<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.","<br>";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) 
    {
    echo "Sorry, file already exists.","<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 5000000) 
    {
    echo "Sorry, your file is too large.","<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "JPG"&& $imageFileType != "png" && $imageFileType != "PNG"&& $imageFileType != "jpeg"&& $imageFileType != "JPEG"&& $imageFileType != "gif" && $imageFileType != "GIF")
    {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.","<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
    {
    echo "Sorry, your file was not uploaded.","<br>";
// if everything is ok, try to upload file
}
else 
    {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
            {
        echo "The file ".( $_FILES["image"]["name"]). " has been uploaded.","<br>";
    } else {
        echo "Sorry, there was an error uploading your file.","<br>";
    }
}
?>

