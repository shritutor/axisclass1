<?php
session_start();
include "connection.php";

// Get the form values
$role = mysqli_real_escape_string($conn, $_POST['role']);
$selectedClass = mysqli_real_escape_string($conn, $_POST['selectedClass']);
$division = mysqli_real_escape_string($conn, $_POST['division']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$userid = mysqli_real_escape_string($conn, $_POST['userid']);

// Check if the user exists in the database
$sql = "SELECT * FROM user WHERE id = '$userid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists, update the school details
    $sql = "UPDATE user SET classes_id = '$selectedClass', divisions_id = '$division', schools_id = '$schoolid' WHERE id = '$userid'";

    if (mysqli_query($conn, $sql)) {
        // School details updated successfully

        if ($role == "Student") {
            // Check if the school has at least 3 other associated users
            $checkSchoolUsersQuery = "SELECT COUNT(*) as count FROM user WHERE schools_id = '$schoolid' AND id != '$userid'";
            $checkSchoolUsersResult = mysqli_query($conn, $checkSchoolUsersQuery);

            if ($checkSchoolUsersResult && mysqli_num_rows($checkSchoolUsersResult) > 0) {
                $row = mysqli_fetch_assoc($checkSchoolUsersResult);
                $associatedUserCount = $row['count'];

                // Update user_type based on associated user count
                $userType = ($associatedUserCount >= 3) ? "1" : "2";

                $updateUserTypeQuery = "UPDATE user SET users_type = '$userType' WHERE id = '$userid'";
                mysqli_query($conn, $updateUserTypeQuery);
            }
        } elseif ($role == "Teacher") {
            // Check the teacher_type
            $teacherType = mysqli_real_escape_string($conn, $_POST['teacherType']);

            // Update user_type based on teacher_type
            if ($teacherType == "Class Teacher") {
                $userType = "3";
            } elseif ($teacherType == "Subject Teacher") {
                $userType = "4";
            }

            $updateUserTypeQuery = "UPDATE user SET users_type = '$userType' WHERE id = '$userid'";
            mysqli_query($conn, $updateUserTypeQuery);
        } elseif ($role == "Correspondent") {
            // Update user_type for Correspondent
            $userType = "5";

            $updateUserTypeQuery = "UPDATE user SET users_type = '$userType' WHERE id = '$userid'";
            mysqli_query($conn, $updateUserTypeQuery);
        }

        $response = array('success' => true, 'message' => 'School details updated successfully');
    } else {
        // Error updating school details
        $response = array('success' => false, 'message' => 'Error updating school details');
    }
} else {
    // User does not exist
    $response = array('success' => false, 'message' => 'User does not exist');
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
