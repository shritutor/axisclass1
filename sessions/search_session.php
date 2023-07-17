<?php
// search_session.php
session_start();
include("../backend/connection.php");

$searchText = mysqli_real_escape_string($conn, $_POST['searchText']);
$schoolid = $_SESSION['schoolid'];
$userid = $_SESSION['uid'];
$userType = $_SESSION['usertype'];


$response = array();

if ($userType == '3' || $userType == '4') {
    // Query for user type 3 and 4
    $query = "SELECT s.id, s.title, c.class, d.divisions, s.description, s.coverimage_path, s.pdf_path, s.video_path, s.subject_id
    FROM sessions s
    JOIN classes c ON s.classes_id = c.id
    JOIN divisions d ON s.divisions_id = d.id
    WHERE (s.title LIKE '%$searchText%' OR s.description LIKE '%$searchText%')
    AND s.school_id = $schoolid
    AND s.user_id = $userid";
} else {
    // Query for other user types
    $query = "SELECT DISTINCT s.id, s.title, s.description, s.coverimage_path, s.pdf_path, s.video_path, s.subject_id FROM sessions s JOIN user u ON s.school_id = u.schools_id AND s.divisions_id = u.divisions_id AND s.classes_id = u.classes_id WHERE (s.title LIKE '%%' OR s.description LIKE '%%')
";
}

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $record = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'classDivision' => $row['class'] . " " . $row['divisions'],
            'coverImage' => $row['coverimage_path'],
            'pdfLink' => $row['pdf_path'],
            'videoLink' => $row['video_path'],
            'subjectId' => $row['subject_id'],
            'description' => $row['description']
            // Add more fields as needed
        );

        $response[] = $record;
    }
}

mysqli_close($conn);

echo json_encode($response);
?>
