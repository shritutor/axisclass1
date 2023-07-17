<?php
// Connect to your database
include("../backend/connection.php");
session_start();
$schoolid = $_SESSION['schoolid'];
$userid = $_SESSION['uid'];

// Fetch event data from the database
$query = "SELECT id, title, start, end, description, coverimage_path, is_private FROM events WHERE school_id='$schoolid' AND user_id='$userid'";

// Check if the 'view' parameter is defined
if (isset($_GET['view'])) {
  $view = $_GET['view'];
  
  // Modify the SQL query based on the selected view
  if ($view === 'upcoming') {
    $query .= " AND start >= CURDATE()"; // Filter upcoming events based on start date
  } else if ($view === 'history') {
    $query .= " AND end < CURDATE()"; // Filter historical events based on end date
  }
}

$result = mysqli_query($conn, $query);

$events = array();

// Process the query results and create an array of event objects
while ($row = mysqli_fetch_assoc($result)) {
  $event = array(
    'title' => $row['title'],
    'id' => $row['id'],
    'description' => $row['description'],
    'start' => $row['start'],
    'end' => $row['end'],
    'coverimage_path' => $row['coverimage_path'],
    'is_private' => $row['is_private']
  );

  $events[] = $event;
}

// Close the database connection
mysqli_close($conn);

// Send the event data as JSON response
header('Content-Type: application/json');
echo json_encode($events);
?>
