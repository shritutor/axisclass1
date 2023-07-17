<?php
include("../backend/connection.php");

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
$middleName = mysqli_real_escape_string($conn, $_POST['middleName']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
if(isset($_POST['subject'])){
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
}
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
$dateOfBirth = mysqli_real_escape_string($conn, $_POST['dateOfBirth']);
$nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
$adharID = mysqli_real_escape_string($conn, $_POST['adharID']);
$area = mysqli_real_escape_string($conn, $_POST['area']);
$city = mysqli_real_escape_string($conn, $_POST['city']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$country = mysqli_real_escape_string($conn, $_POST['country']);

// Check if a new profile image was uploaded
if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
    $profileImage = $_FILES['profileImage'];
  
    // Process and move the uploaded image to a desired location
    $uploadDir = 'profile_images/';
    $uploadPath = $uploadDir . basename($profileImage['name']);
    $imageFileType = strtolower(pathinfo($uploadPath, PATHINFO_EXTENSION));
  
    // Generate a unique name for the uploaded image
    $uniqueName = uniqid() . '.' . $imageFileType;
    $newUploadPath = $uploadDir . $uniqueName;
  
    if (move_uploaded_file($profileImage['tmp_name'], $newUploadPath)) {
        // Update the profile image path in the database
        $query = "UPDATE user SET profile_image = '$newUploadPath' WHERE id = '$userid'";
        mysqli_query($conn, $query);
    }
}

if(isset($_POST['subject'])){
// Update other profile information
$query = "UPDATE user SET
    first_name = '$firstName',
    middle_name = '$middleName',
    last_name = '$lastName',
    gender = '$gender',
    email = '$email',
    phone = '$phoneNumber',
    dateofbirth = '$dateOfBirth',
    nationality = '$nationality',
    aadharid = '$adharID',
    area = '$area',
    city = '$city',
    state = '$state',
    country = '$country',
    subject_id = '$subject'
    WHERE id = '$userid'";
}
else{
    $query = "UPDATE user SET
    first_name = '$firstName',
    middle_name = '$middleName',
    last_name = '$lastName',
    gender = '$gender',
    email = '$email',
    phone = '$phoneNumber',
    dateofbirth = '$dateOfBirth',
    nationality = '$nationality',
    aadharid = '$adharID',
    area = '$area',
    city = '$city',
    state = '$state',
    country = '$country'
    WHERE id = '$userid'";
}

if (mysqli_query($conn, $query)) {
    echo '1';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
