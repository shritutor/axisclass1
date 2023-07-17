<?php
// delete_library.php
session_start();
include("../backend/connection.php");

if (isset($_GET['id'])) {
    $sessionId = $_GET['id'];

    // Fetch the record details
    $query = "SELECT * FROM sessions WHERE id = $sessionId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $coverImage = $row['coverimage_path'];
        $pdfPath = $row['pdf_path'];
        $videoPath = $row['video_path'];

        // Perform the deletion query
        $query = "DELETE FROM sessions WHERE id = $sessionId";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Deletion successful, delete the cover image and PDF file
            if (!empty($coverImage)) {
                unlink($coverImage); // Delete the cover image file
            }

            if (!empty($pdfPath)) {
                unlink($pdfPath); // Delete the PDF file
            }
            
            if (!empty($videoPath)) {
                unlink($videoPath); // Delete the PDF file
            }

            $_SESSION['success_message'] = "Record deleted successfully.";
        } else {
            // Deletion failed
            $_SESSION['error_message'] = "Failed to delete record.";
        }
    } else {
        // Invalid library record
        $_SESSION['error_message'] = "Invalid library record.";
    }
} else {
    // Invalid request
    $_SESSION['error_message'] = "Invalid request.";
}

mysqli_close($conn);

// Redirect back to the library page
header("Location: sessions.php");
exit();
?>
