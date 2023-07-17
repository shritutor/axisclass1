<?php
include("../backend/connection.php");

$schoolname = mysqli_real_escape_string($conn, $_POST['schoolname']);
$schoolid = mysqli_real_escape_string($conn, $_POST['schoolid']);
$udisenumber = mysqli_real_escape_string($conn, $_POST['udisenumber']);
$registrationnumber = mysqli_real_escape_string($conn, $_POST['registrationnumber']);
$areaname = mysqli_real_escape_string($conn, $_POST['areaname']);
$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
$principal = mysqli_real_escape_string($conn, $_POST['principal']);
$viceprincipal = mysqli_real_escape_string($conn, $_POST['viceprincipal']);
$incharge = mysqli_real_escape_string($conn, $_POST['incharge']);
$workingyearstartdate = mysqli_real_escape_string($conn, $_POST['workingyearstartdate']);
$workingyearenddate = mysqli_real_escape_string($conn, $_POST['workingyearenddate']);

// Check if a new photo was uploaded
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $photo = $_FILES['photo'];

    // Process and move the uploaded photo to a desired location
    $uploadDir = 'school_photos/';
    $uploadPath = $uploadDir . basename($photo['name']);
    $imageFileType = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));

    // Generate a unique name for the uploaded photo
    $uniqueName = uniqid() . '.' . $imageFileType;
    $newUploadPath = $uploadDir . $uniqueName;

    if (move_uploaded_file($photo['tmp_name'], $newUploadPath)) {
        // Update the photo path in the database
        $query = "UPDATE schools SET imageurl = '$newUploadPath' WHERE id = '$schoolid'";
        mysqli_query($conn, $query);
    }
}

// Update school information
$query = "UPDATE schools SET
    schoolname = '$schoolname',
    udisenumber = '$udisenumber',
    registrationnumber = '$registrationnumber',
    areaname = '$areaname',
    pincode = '$pincode',
    city = '$city',
    email = '$email',
    phonenumber = '$phonenumber',
    principal = '$principal',
    viceprincipal = '$viceprincipal',
    incharge = '$incharge',
    workingyearstartdate = '$workingyearstartdate',
    workingyearenddate = '$workingyearenddate'
    WHERE id = '$schoolid'";

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
