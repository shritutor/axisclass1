<?php
// Establish database connection

include("connection.php");
session_start();

$user_id = $_SESSION['uid'];

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $senderId = $_POST['sender_id'];
    $recipientId = $_POST['recipient_id'];
    $messageText = $_POST['message_text'];
    $imagePath = $_POST['image_path'];
    $timestamp = date('Y-m-d H:i:s');

    // Insert the message into the database
    $sql = "INSERT INTO messages (sender_id, recipient_id, message_text, image_path, timestamp)
              VALUES ('$senderId', '$recipientId', '$messageText', '$imagePath', '$timestamp')";

    if (mysqli_query($conn, $sql)) {
        // Message inserted successfully
        echo "Message sent successfully";
    } else {
        // Error occurred while inserting the message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
