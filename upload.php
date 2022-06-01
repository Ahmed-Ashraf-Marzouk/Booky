<?php
// Include the database configuration file  
require_once 'config.php';

session_start();
error_reporting(0);
// If file upload form is submitted 
$status = $statusMsg = '';
if (isset($_POST["submit"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $username = $_SESSION['username'];
            $sql = "INSERT INTO userinfo (userpic)
VALUES ('$imgContent') WHERE username = '$username' ";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
                header("Location: profile.php");
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
}

// Display status message 
echo $statusMsg;
