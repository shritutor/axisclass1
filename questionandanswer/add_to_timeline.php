<?php
include("../backend/connection.php");
session_start();

$schoolid = $_SESSION['schoolid'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $question = $_POST['quote'];
    $subjectid = $_POST['subjectq'];
    $isPrivate = 0;
    $user_id = $_POST['user_id'];

    // Handle the uploaded file
    $coverImagePath = '';
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $tempFilePath = $_FILES['photo']['tmp_name'];
        $coverImageName = $_FILES['photo']['name'];
        $coverImageExt = pathinfo($coverImageName, PATHINFO_EXTENSION);
        $coverImagePath = 'uploads/' . uniqid() . '.' . $coverImageExt;
        move_uploaded_file($tempFilePath, $coverImagePath);
    }

    // Insert the record into the timeline table
    $insertQuery = "INSERT INTO questionandanswer (school_id, user_id,subject_id, question, coverimage_path, is_private, created_at)
                    VALUES ('$schoolid', '$user_id','$subjectid', '$question', '$coverImagePath', '$isPrivate', NOW())";
                    
                   
    $result = mysqli_query($conn, $insertQuery);

    if ($result) {
        $response = array(
            'success' => true,
            'message' => 'Record added to the timeline.'
        );
    } else {
        $response = array(
            'success' => false,
            'message' => 'Failed to add record to the timeline.'
        );
    }

    // Output the JSON response
    echo json_encode($response);
} else {
    $response = array(
        'success' => false,
        'message' => 'Invalid request method.'
    );

    // Output the JSON response
    echo json_encode($response);
}

mysqli_close($conn);
?>
