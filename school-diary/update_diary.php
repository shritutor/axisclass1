<?php
session_start();
$schooldiaryid = $_SESSION['schooldiaryid'];
include("../backend/connection.php");

$title = mysqli_real_escape_string($conn, $_POST['title']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$isprivate = mysqli_real_escape_string($conn, $_POST['isprivate']);
$is_classworkd_or_homework = mysqli_real_escape_string($conn, $_POST['is_classworkd_or_homework']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

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

// Check if a new PDF file was uploaded
if (!empty($_FILES['pdf_path']['name']) && $_FILES['pdf_path']['error'] === UPLOAD_ERR_OK) {
    $pdfFile = $_FILES['pdf_path'];

    // Process and move the uploaded PDF file to a desired location
    $uploadDir = 'pdf_files/';
    $uploadPath = $uploadDir . basename($pdfFile['name']);

    if (move_uploaded_file($pdfFile['tmp_name'], $uploadPath)) {
        // Update the PDF file path in the database
        $pdfFilePath = $uploadPath;
    }
} else {
    // PDF file not updated, retain the existing value from the database
    $pdfFilePath = ""; // Set to an empty string or NULL depending on your database field type
}

// Update the library record in the database
$query = "UPDATE schooldiary SET
            title = '$title',
            school_id = '$schoolid',
            user_id = '$userid',
            subject_id = '$subject',
            coverimage_path = IF('$coverImage' = '', coverimage_path, '$coverImage'),
            pdf_path = IF('$pdfFilePath' = '', pdf_path, '$pdfFilePath'),
            is_private = '$isprivate',
            is_classworkd_or_homework = '$is_classworkd_or_homework',
            description = '$description'
          WHERE id = $schooldiaryid"; // Replace $libraryId with the actual library ID you want to update

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
