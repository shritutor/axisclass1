<?php
include("../backend/connection.php");

if (!isset($_GET['schoolid'])) {
    die('School ID not found in GET.');
}

$schoolid = $_GET['schoolid'];

// Set the appropriate headers for SSE
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
header('Access-Control-Allow-Origin: *');

// Function to send SSE message
function sendSSEMessage($data) {
    echo "data: " . json_encode($data) . "\n\n";
    ob_flush();
    flush();
}

// Fetch the latest user records from the events table
$eventsQuery = "SELECT e.*, u.first_name, u.last_name, u.profile_image
                FROM events e
                INNER JOIN user u ON e.user_id = u.id
                WHERE e.school_id = ? AND e.id > ?
                ORDER BY e.created_at ASC";

$eventsStmt = mysqli_prepare($conn, $eventsQuery);
mysqli_stmt_bind_param($eventsStmt, 'si', $schoolid, $lastEventId);

// Fetch the latest user records from the library table
$libraryQuery = "SELECT l.*, u.first_name, u.last_name, u.profile_image
                FROM library l
                INNER JOIN user u ON l.user_id = u.id
                WHERE l.school_id = ? AND l.id > ?
                ORDER BY l.created_at ASC";
$libraryStmt = mysqli_prepare($conn, $libraryQuery);
mysqli_stmt_bind_param($libraryStmt, 'si', $schoolid, $lastLibraryId);

// Fetch the latest user records from the schooldiary table
$schooldiaryQuery = "SELECT s.*, u.first_name, u.last_name, u.profile_image
                    FROM schooldiary s
                    INNER JOIN user u ON s.user_id = u.id
                    WHERE s.school_id = ? AND s.id > ?
                    ORDER BY s.created_at ASC";
$schooldiaryStmt = mysqli_prepare($conn, $schooldiaryQuery);
mysqli_stmt_bind_param($schooldiaryStmt, 'si', $schoolid, $lastSchoolDiaryId);

// Send the initial user records as an SSE message
function sendInitialUserRecords($eventsStmt, $libraryStmt, $schooldiaryStmt) {
    global $schoolid, $lastEventId, $lastLibraryId, $lastSchoolDiaryId;

    mysqli_stmt_bind_param($eventsStmt, 'si', $schoolid, $lastEventId);
    mysqli_stmt_execute($eventsStmt);
    $eventsResult = mysqli_stmt_get_result($eventsStmt);

    mysqli_stmt_bind_param($libraryStmt, 'si', $schoolid, $lastLibraryId);
    mysqli_stmt_execute($libraryStmt);
    $libraryResult = mysqli_stmt_get_result($libraryStmt);

    mysqli_stmt_bind_param($schooldiaryStmt, 'si', $schoolid, $lastSchoolDiaryId);
    mysqli_stmt_execute($schooldiaryStmt);
    $schooldiaryResult = mysqli_stmt_get_result($schooldiaryStmt);

    // Combine the results into a single array
    $userRecords = array();

    while ($events = mysqli_fetch_assoc($eventsResult)) {
        $userRecords[] = $events;
    }
    while ($library = mysqli_fetch_assoc($libraryResult)) {
        $userRecords[] = $library;
    }
    while ($schooldiary = mysqli_fetch_assoc($schooldiaryResult)) {
        $userRecords[] = $schooldiary;
    }

    // Send the initial user records as an SSE message
    sendSSEMessage(array('type' => 'userRecord', 'record' => $userRecords));

    // Update the last fetched record IDs
    if (!empty($userRecords)) {
        $lastEventId = end($userRecords)['id'];
        $lastLibraryId = end($userRecords)['id'];
        $lastSchoolDiaryId = end($userRecords)['id'];
    }
}

sendInitialUserRecords($eventsStmt, $libraryStmt, $schooldiaryStmt);

// Function to fetch new user records
function fetchNewUserRecords($eventsStmt, $libraryStmt, $schooldiaryStmt) {
    global $schoolid, $lastEventId, $lastLibraryId, $lastSchoolDiaryId;

    mysqli_stmt_bind_param($eventsStmt, 'si', $schoolid, $lastEventId);
    mysqli_stmt_execute($eventsStmt);
    $eventsResult = mysqli_stmt_get_result($eventsStmt);

    mysqli_stmt_bind_param($libraryStmt, 'si', $schoolid, $lastLibraryId);
    mysqli_stmt_execute($libraryStmt);
    $libraryResult = mysqli_stmt_get_result($libraryStmt);

    mysqli_stmt_bind_param($schooldiaryStmt, 'si', $schoolid, $lastSchoolDiaryId);
    mysqli_stmt_execute($schooldiaryStmt);
    $schooldiaryResult = mysqli_stmt_get_result($schooldiaryStmt);

    // Combine the results into a single array
    $newUserRecords = array();

    while ($events = mysqli_fetch_assoc($eventsResult)) {
        $newUserRecords[] = $events;
    }
    while ($library = mysqli_fetch_assoc($libraryResult)) {
        $newUserRecords[] = $library;
    }
    while ($schooldiary = mysqli_fetch_assoc($schooldiaryResult)) {
        $newUserRecords[] = $schooldiary;
    }

    return $newUserRecords;
}

// Loop to continuously check for new user records every 2 seconds
while (true) {
    sleep(2);
    
    // Fetch new user records
    $newRecords = fetchNewUserRecords($eventsStmt, $libraryStmt, $schooldiaryStmt);

    // Send SSE message for each new record
    foreach ($newRecords as $record) {
        sendSSEMessage(array('type' => 'newPost', 'post' => $record));
    }

    // Update the last fetched record IDs
    if (!empty($newRecords)) {
        $lastEventId = end($newRecords)['id'];
        $lastLibraryId = end($newRecords)['id'];
        $lastSchoolDiaryId = end($newRecords)['id'];
    }
}
?>
