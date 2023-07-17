<?php
include("../backend/connection.php");

$title = mysqli_real_escape_string($conn, $_POST['title']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$isprivate = mysqli_real_escape_string($conn, $_POST['isprivate']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$startDateTime = mysqli_real_escape_string($conn, $_POST['startDateTime']);
$endDateTime = mysqli_real_escape_string($conn, $_POST['endDateTime']);

// Check if a new cover image was uploaded
if (isset($_FILES['coverImage']) && $_FILES['coverImage']['error'] === UPLOAD_ERR_OK) {
    $coverImage = $_FILES['coverImage'];

    // Process and move the uploaded cover image to a desired location
    $uploadDir = 'cover_images/';
    $uploadPath = $uploadDir . basename($coverImage['name']);
    $imageFileType = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));

    // Generate a unique name for the uploaded cover image
    $uniqueName = uniqid() . '.' . $imageFileType;
    $newUploadPath = $uploadDir . $uniqueName;

    if (move_uploaded_file($coverImage['tmp_name'], $newUploadPath)) {
        // Update the cover image path in the database
        $coverImage = $newUploadPath;
    }
}


// Insert new record into the database
$query = "INSERT INTO events (title,school_id,user_id, coverimage_path, is_private, description,start,end) 
          VALUES ('$title','$schoolid','$userid','$coverImage', '$isprivate', '$description','$startDateTime','$endDateTime')";
          
       

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
