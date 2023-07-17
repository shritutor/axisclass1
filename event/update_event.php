<?php
session_start();
$eventid = $_SESSION['eventid'];
include("../backend/connection.php");

$title = mysqli_real_escape_string($conn, $_POST['title']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$isprivate = mysqli_real_escape_string($conn, $_POST['isprivate']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$start = mysqli_real_escape_string($conn, $_POST['startDateTime']);
$end = mysqli_real_escape_string($conn, $_POST['endDateTime']);


// Check if a new cover image was uploaded
if (!empty($_FILES['coverImage']['name']) && $_FILES['coverImage']['error'] === UPLOAD_ERR_OK) {
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
} else {
    // Cover image not updated, retain the existing value from the database
    $coverImage = ""; // Set to an empty string or NULL depending on your database field type
}



// Update the library record in the database
$query = "UPDATE events SET
            title = '$title',
            school_id = '$schoolid',
            user_id = '$userid',
            coverimage_path = IF('$coverImage' = '', coverimage_path, '$coverImage'),
            is_private = '$isprivate',
            start = '$start',
            end = '$end',
            description = '$description'
          WHERE id = $eventid"; // Replace $libraryId with the actual library ID you want to update

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
