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
header('Content-Type: application/json');

// Fetch user records from the user table
$chatQuery = "SELECT id, first_name, last_name, profile_image, online, last_seen FROM user WHERE divisions_id = '$division_id' AND classes_id = '$classes_id' AND schools_id = '$school_id'";

// Execute the query
$chatResult = mysqli_query($conn, $chatQuery);
if (!$chatResult) {
    handleDatabaseError($conn);
}

$chatData = array();
while ($row = mysqli_fetch_assoc($chatResult)) {
    $chatData[] = [
        'id'=>$row['id'],
        'name' => $row['first_name'] . ' ' . $row['last_name'],
        'avatar' => ($row['profile_image']) ? '../myprofile/' . $row['profile_image'] : 'default_profile_image.png',
        'online' => $row['online'],
        'lastSeen' => $row['last_seen'],
        'messages' => [], // Initialize an empty array for messages
    ];
}

// Iterate over each chatData entry
foreach ($chatData as &$chatEntry) {
    $senderId = $chatEntry['id'];
    $recipientId = $user_id;

    // Query to fetch messages between the sender and recipient
    $messageQuery = "SELECT * FROM messages WHERE (sender_id = '$senderId' AND recipient_id = '$recipientId') OR (sender_id = '$recipientId' AND recipient_id = '$senderId')";
    $messageResult = mysqli_query($conn, $messageQuery);
    if (!$messageResult) {
        handleDatabaseError($conn);
    }

    // Fetch and append messages to the chatData entry
    while ($messageRow = mysqli_fetch_assoc($messageResult)) {
        $message = [
            'sender' => ($messageRow['sender_id'] == $senderId) ? 'me' : 'other',
            'text' => $messageRow['message_text'],
            'time' => $messageRow['timestamp'],
            'image' => $messageRow['image_path']
        ];
        $chatEntry['messages'][] = $message;
    }
}

// Convert the chat data to JSON format
$chatJson = json_encode($chatData);

// Return the JSON response
echo $chatJson;
?>

