<?php
include("../backend/connection.php");
session_start();

$schoolid = $_SESSION['schoolid'];

// Set the appropriate content type header
header('Content-Type: application/json');

// Get the page number from the request
$page = $_POST['page'];
$perPage = 10; // Number of records to fetch per page

// Calculate the offset based on the page number and perPage value
$offset = ($page - 1) * $perPage;

// Function to handle database errors
function handleDatabaseError($conn) {
    $error = mysqli_error($conn);
    $response = array(
        'status' => 'error',
        'message' => 'Database error: ' . $error
    );
    echo json_encode($response);
    exit;
}

// Fetch user records from the events table with pagination
$eventsQuery = "SELECT e.*, u.first_name, u.last_name, u.profile_image FROM events e
                INNER JOIN user u ON e.user_id = u.id
                WHERE e.school_id = '$schoolid'
                ORDER BY e.created_at DESC
                LIMIT $offset, $perPage";
$eventsResult = mysqli_query($conn, $eventsQuery);
if (!$eventsResult) {
    handleDatabaseError($conn);
}

$events = array();
while ($row = mysqli_fetch_assoc($eventsResult)) {
    $events[] = $row;
}

// Fetch user records from the library table with pagination
$libraryQuery = "SELECT l.*, u.first_name, u.last_name, u.profile_image FROM library l
                INNER JOIN user u ON l.user_id = u.id
                WHERE l.school_id = '$schoolid'
                ORDER BY l.created_at DESC
                LIMIT $offset, $perPage";
$libraryResult = mysqli_query($conn, $libraryQuery);
if (!$libraryResult) {
    handleDatabaseError($conn);
}

$library = array();
while ($row = mysqli_fetch_assoc($libraryResult)) {
    $library[] = $row;
}

// Fetch user records from the schooldiary table with pagination
$schooldiaryQuery = "SELECT s.*, u.first_name, u.last_name, u.profile_image FROM schooldiary s
                INNER JOIN user u ON s.user_id = u.id
                WHERE s.school_id = '$schoolid'
                ORDER BY s.created_at DESC
                LIMIT $offset, $perPage";
$schooldiaryResult = mysqli_query($conn, $schooldiaryQuery);
if (!$schooldiaryResult) {
    handleDatabaseError($conn);
}

$schooldiary = array();
while ($row = mysqli_fetch_assoc($schooldiaryResult)) {
    $schooldiary[] = $row;
}

// Combine the results into a single array
$userRecords = array(
    'events' => $events,
    'library' => $library,
    'schooldiary' => $schooldiary
);

// Free up the memory used by the result sets
mysqli_free_result($eventsResult);
mysqli_free_result($libraryResult);
mysqli_free_result($schooldiaryResult);

// Output the JSON response
$response = array(
    'status' => 'success',
    'records' => array(
        'events' => $events,
        'library' => $library,
        'schooldiary' => $schooldiary
    )
);

echo json_encode($response);

mysqli_close($conn);
?>
