<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";
$error_msg_final = "";
$uploadOk = 1;
$updated = false;
$error = false;

if(isset($_GET["updated"])){
    $updated = $_GET["updated"];
}
if(isset($_GET["error"])){
    $error = $_GET["error"];
}
if(isset($_GET["errmsg"])){
    $error_msg = $_GET["errmsg"];
}
if(isset($_GET["errmsgfinal"])){
    $error_msg_final = $_GET["errmsgfinal"];
}

if (isset($_POST['description'], $_POST['title'], $_POST['abstract'], $_POST['category'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);    
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $error_msg ="File is not an image.";
        $uploadOk = 0;
    }

    // File already exists
    if (file_exists($target_file)) {
    $error_msg = "Sorry, file already exists.";
    $uploadOk = 0;
    }
     // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    $error_msg ="Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        $error_msg ="Sorry, please upload a picture! Only JPG, JPEG, PNG and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error_msg_final ="Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } 
    else {
            //target_file is the path to the pic
           $target_file = $target_dir . "Pic_" . $_SESSION["uploadedpictures"] . "User_" . $_SESSION["user_id"] . '.' . $imageFileType ;
         if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                $success_msg = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $_SESSION["uploadedpictures"] = $_SESSION["uploadedpictures"] + 1;
                //increase number of pics count of user in database
                if ($insert_stmt = $mysqli->prepare("UPDATE members SET uploadedPics= ? WHERE id =?;")) {
                    $insert_stmt->bind_param('ss', $_SESSION["uploadedpictures"], $_SESSION["user_id"]);
                    // Execute the prepared query
                    $insert_stmt->execute();
                }
            }
         else {
            $error_msg_final = "Sorry, there was an error uploading your file.";
            $uploadOk = false;
        }
    }
if ($uploadOk == 1) {
    // Sanitize and validate the data passed in
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $abstract = filter_input(INPUT_POST, 'abstract', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $userid = $_SESSION['user_id'];
        // Insert the new idea into the database 
    if ($insert_stmt = $mysqli->prepare("INSERT INTO ideas (title, abstract, description, category, user_id, pic) VALUES (?, ?, ?, ?, ?, ?)")) {
        $insert_stmt->bind_param('ssssds', $title, $abstract, $description, $category, $userid, $target_file);
        // Execute the prepared query.
        if (! $insert_stmt->execute()) {
            $error_msg_final = "Failed to upload! Please try again!";
            header('Location: start-share.php?error=true&errmsg='.$error_msg.'&errmsgfinal='.$error_msg_final);
            //header('Location: ../error.php?err=Registration failure: INSERT');
        }
        else{
                header('Location: start-share.php?updated=true');
            }
    }
}   
else{
    //uploadOk is false
     header('Location: start-share.php?error=true&errmsg='.$error_msg.'&errmsgfinal='.$error_msg_final);
}
}
