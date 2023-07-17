<?php
include("../backend/connection.php");

$title = mysqli_real_escape_string($conn, $_POST['title']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$isprivate = mysqli_real_escape_string($conn, $_POST['isprivate']);
$description = mysqli_real_escape_string($conn, $_POST['description']);

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

// Check if a new PDF file was uploaded
if (isset($_FILES['pdfFile']) && $_FILES['pdfFile']['error'] === UPLOAD_ERR_OK) {
    $pdfFile = $_FILES['pdfFile'];

    // Process and move the uploaded PDF file to a desired location
    $uploadDir = 'pdf_files/';
    $uploadPath = $uploadDir . basename($pdfFile['name']);

    if (move_uploaded_file($pdfFile['tmp_name'], $uploadPath)) {
        // Update the PDF file path in the database
        $pdfFilePath = $uploadPath;
    }
}

// Insert new record into the database
$query = "INSERT INTO library (title,school_id,user_id,subject_id, coverimage_path, pdf_path, is_private, description) 
          VALUES ('$title','$schoolid','$userid','$subject', '$coverImage', '$pdfFilePath', '$isprivate', '$description')";

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
