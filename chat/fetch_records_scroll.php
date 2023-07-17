<?php
include("../backend/connection.php");
session_start();

$user_id = $_SESSION['uid'];

// Set the appropriate content type header
header('Content-Type: text/html');

// Fetch user information from the user table
$userQuery = "SELECT schools_id, classes_id, divisions_id FROM user WHERE id = '$user_id'";
$userResult = mysqli_query($conn, $userQuery);
if (!$userResult) {
    handleDatabaseError($conn);
}

$userData = mysqli_fetch_assoc($userResult);

$schools_id = $userData['schools_id'];
$classes_id = $userData['classes_id'];
$divisions_id = $userData['divisions_id'];

// Get the page number and perPage value from the request
$page = $_POST['page'];
$perPage = $_POST['perPage'];

// Calculate the offset based on the page number and perPage value
$offset = ($page - 1) * $perPage;

// Fetch user records from the events table
$eventsQuery = "SELECT e.coverimage_path, e.description, e.title, e.created_at, u.first_name, u.last_name, u.profile_image, 'event' AS record_type
                FROM events e
                INNER JOIN user u ON e.user_id = u.id
                WHERE e.school_id = '$schools_id' AND u.classes_id = '$classes_id' AND u.divisions_id = '$divisions_id' AND e.is_private != 0";

// Fetch user records from the library table
$libraryQuery = "SELECT l.coverimage_path, l.description, l.title, l.created_at, u.first_name, u.last_name, u.profile_image, 'library' AS record_type
                FROM library l
                INNER JOIN user u ON l.user_id = u.id
                WHERE l.school_id = '$schools_id' AND u.classes_id = '$classes_id' AND u.divisions_id = '$divisions_id' AND l.is_private != 0";

// Fetch user records from the schooldiary table
$schooldiaryQuery = "SELECT s.coverimage_path, s.description, s.title, s.created_at, u.first_name, u.last_name, u.profile_image, 'schooldiary' AS record_type
                FROM schooldiary s
                INNER JOIN user u ON s.user_id = u.id
                WHERE s.school_id = '$schools_id' AND u.classes_id = '$classes_id' AND u.divisions_id = '$divisions_id' AND s.is_private != 0";

// Combine the queries using UNION ALL
$combinedQuery = "($eventsQuery) UNION ALL ($libraryQuery) UNION ALL ($schooldiaryQuery)
                ORDER BY created_at DESC
                LIMIT $offset, $perPage";


// Execute the combined query
$combinedResult = mysqli_query($conn, $combinedQuery);
if (!$combinedResult) {
    handleDatabaseError($conn);
}

$combinedRecords = array();
while ($row = mysqli_fetch_assoc($combinedResult)) {
    $combinedRecords[] = $row;
}

// Generate the HTML content for the records
$html = '';
$count = 1;
foreach ($combinedRecords as $record) {
    if ($count == 1) {
        // Perform special operation for the first record
    } else {
        $html .= '<div class="timeline-card">';
        $html .= '<div class="user-profile">';
        if ($record['profile_image']) {
            $html .= '<img src="../myprofile/' . $record['profile_image'] . '" alt="Profile Image" width="50" height="50">';
        } else {
            $html .= '<img src="default_profile_image.png" alt="Profile Image" width="50" height="50">';
        }
        $html .= '<h5 class="card-title">' . $record['first_name'] . ' ' . $record['last_name'] . '</h5>';
        $html .= '</div>';
        $html .= '<p class="card-text">' . $record['description'] . '</p>';
        $html .= '<div class="card-time">' . $record['created_at'] . '</div>';
        $html .= '<div class="row">';
        $html .= '<div class="col-md-4">';
        $html .= '<i class="icon like-icon far fa-thumbs-up"></i> Like';
        $html .= '</div>';
        $html .= '<div class="col-md-4">';
        $html .= '<i class="icon comment-icon far fa-comment"></i> Comment';
        $html .= '</div>';
        $html .= '<div class="col-md-4">';
        $html .= '<i class="icon share-icon far fa-share-square"></i> Share';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
    }
    $count = $count + 1;
}

// Send the HTML content as the response
echo $html;

// Function to handle database errors
function handleDatabaseError($conn) {
    // Log the error or handle it as needed
    // For example, you can log the error to a file
    error_log('Database error: ' . mysqli_error($conn));
    // Return an appropriate error message to the client
    echo 'An error occurred while fetching the records. Please try again later.';
}
?>
