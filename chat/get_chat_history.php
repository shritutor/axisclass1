<?php
// Establish database connection

include("connection.php");
session_start();

$user_id = $_SESSION['uid'];


// Get the sender and recipient IDs from the request
$senderId = $_GET['sender_id'];
$recipientId = $_GET['recipient_id'];

// Fetch the chat history between the sender and recipient from the database
$sql = "SELECT * FROM messages WHERE (sender_id = '$senderId' AND recipient_id = '$recipientId')
          OR (sender_id = '$recipientId' AND recipient_id = '$senderId') ORDER BY timestamp ASC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Chat history records found
    $chatHistory = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $chatHistory[] = $row;
    }

    // Return the chat history as a JSON response
    echo json_encode($chatHistory);
} else {
    // No chat history records found
    echo "No chat history found";
}

// Close the database connection
mysqli_close($conn);
?>
