<?php
session_start();
include "connection.php";

// Initialize the response array
$response = array('success' => false, 'results' => array());

// Get the schoolName from the GET request
$schoolName = mysqli_real_escape_string($conn, $_GET['schoolName']);

// Perform the database search
$query = "SELECT * FROM schools WHERE schoolname LIKE '%$schoolName%'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $response['success'] = true;

        while ($row = mysqli_fetch_assoc($result)) {
            $school = array(
                'id'=>$row['id'],
                'schoolname' => $row['schoolname'],
                'udisenumber' => $row['udisenumber'],
                'registrationnumber' => $row['registrationnumber'],
                'areaname' => $row['areaname'],
                'pincode' => $row['pincode'],
                'city' => $row['city'],
                'phonenumber' => $row['phonenumber'],
                'email' => $row['email'],
                'imageurl' => $row['imageurl']
            );

            $response['results'][] = $school;
        }
    } else {
        $response['message'] = 'No schools found.';
    }
} else {
    $response['message'] = 'Error executing database query.';
}

// Send the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
