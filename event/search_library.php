<?php
// search_library.php
session_start();
include("../backend/connection.php");

$searchText = mysqli_real_escape_string($conn, $_POST['searchText']);
$schoolid = $_SESSION['schoolid'];
$userid = $_SESSION['uid'];
// Construct the SQL query to search for records
$query = "SELECT * FROM library WHERE (title LIKE '%$searchText%' OR description LIKE '%$searchText%') AND school_id=$schoolid AND user_id=$userid";

$result = mysqli_query($conn, $query);

$response = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $record = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'coverImage'=>$row['coverimage_path'],
            'pdfLink'=>$row['pdf_path'],
            'description' => $row['description']
            // Add more fields as needed
        );

        $response[] = $record;
    }
}

mysqli_close($conn);

echo json_encode($response);
?>
