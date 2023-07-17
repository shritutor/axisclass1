<?php
// Connect to your database
include("../backend/connection.php");

// Fetch event data from the database
$query = "SELECT title, start, end, description FROM events"; // Replace 'events' with your actual table name
$result = mysqli_query($conn, $query);

$events = array();

// Process the query results and create an array of event objects
while ($row = mysqli_fetch_assoc($result)) {
  $event = array(
    'title' => $row['title'],
    'description'=>$row['description'],
    'start' => $row['start'],
    'end' => $row['end']
  );

  $events[] = $event;
}

// Close the database connection
mysqli_close($conn);

// Send the event data as JSON response
header('Content-Type: application/json');
echo json_encode($events);
?>
