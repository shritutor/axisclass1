<?php
include("../backend/connection.php");
session_start();

$user_id = $_SESSION['uid'];

// Fetch user information from the user table
$userQuery = "SELECT divisions_id, classes_id, schools_id FROM user WHERE id = '$user_id'";

$userResult = mysqli_query($conn, $userQuery);
if (!$userResult) {
    handleDatabaseError($conn);
}

$userData = mysqli_fetch_assoc($userResult);

$division_id = $userData['divisions_id'];
$classes_id = $userData['classes_id'];
$school_id = $userData['schools_id'];



// Set the appropriate content type header
header('Content-Type: text/html');

// Get the page number from the request
$page = 1;
$perPage = 1; // Number of records to fetch per page

// Calculate the offset based on the page number and perPage value
$offset = ($page - 1) * $perPage;

// Fetch user records from the events table
$eventsQuery = "SELECT e.coverimage_path, e.description, e.title, e.created_at, u.first_name, u.last_name, u.profile_image, 'event' AS record_type
                FROM events e
                INNER JOIN user u ON e.user_id = u.id
                WHERE u.divisions_id = '$division_id' AND u.classes_id = '$classes_id' AND u.schools_id = '$school_id' AND e.is_private != 0";
                
         

// Fetch user records from the library table
$libraryQuery = "SELECT l.coverimage_path, l.description, l.title, l.created_at, u.first_name, u.last_name, u.profile_image, 'library' AS record_type
                FROM library l
                INNER JOIN user u ON l.user_id = u.id
                WHERE u.divisions_id = '$division_id' AND u.classes_id = '$classes_id' AND u.schools_id = '$school_id' AND l.is_private != 0";

// Fetch user records from the schooldiary table
$schooldiaryQuery = "SELECT s.coverimage_path, s.description, s.title, s.created_at, u.first_name, u.last_name, u.profile_image, 'schooldiary' AS record_type
                FROM schooldiary s
                INNER JOIN user u ON s.user_id = u.id
                WHERE u.divisions_id = '$division_id' AND u.classes_id = '$classes_id' AND u.schools_id = '$school_id' AND s.is_private != 0";

// Fetch user records from the timeline table
$timelineQuery = "SELECT t.coverimage_path, t.description, '', t.created_at, u.first_name, u.last_name, u.profile_image, 'timeline' AS record_type
                FROM timeline t
                INNER JOIN user u ON t.user_id = u.id
                WHERE u.divisions_id = '$division_id' AND u.classes_id = '$classes_id' AND u.schools_id = '$school_id' AND t.is_private = 0";

// Combine the queries using UNION ALL
$combinedQuery = "($eventsQuery) UNION ALL ($libraryQuery) UNION ALL ($schooldiaryQuery) UNION ALL ($timelineQuery)
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
foreach ($combinedRecords as $record) {
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
    $html .= '<div class="comment-form">';
    $html .= '<form>';
    $html .= '<div class="form-group">';
    $html .= '<input type="text" class="form-control" placeholder="Write a comment">';
    $html .= '</div>';
    $html .= '<button type="submit" class="symbol-button"><i class="fas fa-paper-plane"></i></button>';
    $html .= '</form>';
    $html .= '</div>';

    if (!empty($record['comments']) && is_array($record['comments']) && count($record['comments']) > 0) {
        foreach ($record['comments'] as $comment) {
            $html .= '<div class="comment">';
            $html .= '<p class="comment-text">' . $comment['text'] . '</p>';
            $html .= '<p class="comment-time">' . $comment['time'] . '</p>';
            $html .= '</div>';
        }
    }

    $html .= '</div>';
}

// Return the HTML content
echo $html;
?>
