<?php
session_start();
// Establish database connection
include("connection.php");

// Fetch users based on session values
$school_id = $_SESSION['schoolid'];
$divisions_id = $_SESSION['divisionsid'];
$classes_id = $_SESSION['classesid'];

// Fetch the user list from the database
$sql = "SELECT * FROM user WHERE schools_id='$school_id' AND classes_id='$classes_id' AND divisions_id='$divisions_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // User records found
        $users = array();

        while ($row = mysqli_fetch_assoc($result)) {
            // Get user's last_seen and online status
            $userId = $row['id'];
            $lastSeen = getUserLastSeen($conn, $userId);
            $onlineStatus = getUserOnlineStatus($conn, $userId);

            // Add last_seen and online status to the user data
            $row['last_seen'] = $lastSeen;
            $row['online'] = $onlineStatus;

            $users[] = $row;
        }

        // Return the user list as a JSON response
        echo json_encode($users);
    } else {
        // No user records found
        echo "No users found";
    }
} else {
    // Error occurred during the query execution
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

// Helper function to get user's last seen datetime
// Helper function to get user's last seen datetime
function getUserLastSeen($conn, $userId) {
    $query = "SELECT last_seen FROM user_last_seen WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row['last_seen'];
    } else {
        return null;
    }
}

// Helper function to get user's online status
function getUserOnlineStatus($conn, $userId) {
    $query = "SELECT online FROM user WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return ($row['online'] == 1);
    } else {
        return false;
    }
}








?>
