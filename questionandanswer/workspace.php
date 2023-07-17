<?php 
session_start();
// include Function file
include_once('../backend/function.php');
$axisclass = new DB_con();
$getAllInfoClass = $axisclass->getAllInfo('classes');
$getAllInfoDivision = $axisclass->getAllInfo('divisions');
$getAllInfoSubject = $axisclass->getAllInfo('subject');

$getUserInfo = $axisclass->getAllInfoWhere('user', $_SESSION['uid']);
while ($user = mysqli_fetch_array($getUserInfo)) {
    $userfirstname = $user['first_name'];
    $usermiddlename = $user['middle_name'];
    $userlastname = $user['last_name'];
    $usertype = $user['users_type'];
    $schoolid = $user['schools_id'];
}

$getSchoolInfo = $axisclass->getAllInfoWhere('schools', $schoolid);

while ($school = mysqli_fetch_array($getSchoolInfo)) {
    $schoolname = $school['schoolname'];
    $udisenumber = $school['udisenumber'];
    $registrationnumber = $school['registrationnumber'];
    $areaname = $school['areaname'];
    $city = $school['city'];
    $email = $school['email'];
    $phonenumber = $school['phonenumber'];
    $imageurl = $school['imageurl'];
}

$_SESSION['schoolid'] = $schoolid;
$userfullname = $userfirstname . " " . $usermiddlename . " " . $userlastname;
$studentrole = "";
if ($usertype == "2") {
    $studentrole = "monitor";
} else if ($usertype == "3") {
    $studentrole = "Class Teacher";
} else if ($usertype == "4") {
    $studentrole = "Subject Teacher";
} else if ($usertype == "5") {
    $studentrole = "Correspondent";
} else {
    $studentrole = "student";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Workspace</title>
    <!-- Add your CSS and JavaScript dependencies here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .username {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
</style>
<style>
    .timeline-card {
        background-color: #f8f9fa;
        border: none;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .timeline-card .card-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }

    .timeline-card .card-text {
        margin-bottom: 10px;
        color: #555;
    }

    .timeline-card .icon {
        font-size: 18px;
        margin-right: 5px;
    }

    .timeline-card .like-icon {
        color: #007bff;
    }

    .timeline-card .comment-icon {
        color: #17a2b8;
    }

    .timeline-card .share-icon {
        color: #28a745;
    }

    .timeline-card .comment-form {
        margin-top: 10px;
    }

    .timeline-card .comment {
        margin-top: 10px;
        margin-left: 15px;
        border-left: 2px solid #ccc;
        padding-left: 10px;
    }

    .timeline-card .comment .comment-text {
        margin-bottom: 5px;
        color: #555;
    }

    .timeline-card .comment .comment-time {
        font-size: 12px;
        color: #888;
    }

    .timeline-card .symbol-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        font-size: 18px;
        color: #007bff;
    }
    <style>
    /* Style for the form container */
    .form-container {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    /* Style for the file input group */
    .input-group {
        position: relative;
        display: flex;
        align-items: center;
    }

    .input-group input[type="file"] {
        display: none;
    }

    .input-group .custom-file-upload {
        display: inline-block;
        padding: 8px 20px;
        cursor: pointer;
        background-color: #007bff;
        color: #fff;
        border-radius: 5px;
        border: none;
        transition: background-color 0.3s;
    }

    .input-group .custom-file-upload:hover {
        background-color: #0056b3;
    }
</style>
</style>
    <!-- end of the css-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){

    
    
            // Function to fetch posts and update the UI
            function fetchPostsOnlyOneRecord(){
                $.ajax({
                    url: 'fetch_records.php',
                    method: 'POST',
                    dataType: 'html',
                    success: function(response){
                        $('#userRecords').html(response);
                    },
                    error: function(xhr, status, error){
                        console.error(error);
                    }
                });
            }

            // Fetch initial posts on page load
            fetchPosts();

            // Fetch new posts every 5 seconds (adjust as needed)
            setInterval(function(){
                fetchPostsOnlyOneRecord();
            }, 5000); // 5000 milliseconds = 5 seconds
            
            
            
            
            
       
        $('#addTimelineForm').submit(function(e) {
            e.preventDefault(); // Prevent form from submitting normally
            // alert("i am working");

            // Create a FormData object to store the form data
            var formData = new FormData(this);

            // Make an AJAX request to the server
            $.ajax({
                url: 'add_to_timeline.php',
                type: 'POST',
                data: formData,
                dataType: 'html',
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the response from the server
                    if (response == 'success') {
                        // Clear the form fields
                        $('#photo').val('');
                        $('#quote').val('');

                        // Update the timeline posts
                        fetchPostsOnlyOneRecord();
                    } else {
                        // Handle error response
                        console.error(response);
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX error
                    console.error(error);
                }
            });
        });
   
        });
        
        
                   
            
    var page = 1;
    var perPage = 10;
    var isLoading = false; 
        
        // Function to fetch posts and update the UI
    function fetchPosts(){
        $.ajax({
            url: 'fetch_records_scroll.php',
            method: 'POST',
            data: { page: page, perPage: perPage },
            dataType: 'html',
            beforeSend: function(){
                isLoading = true;
                // Show a loading spinner or message
                $('.loading-spinner').show();
            },
            success: function(response){
                $('.loading-spinner').hide();
                if (page === 1) {
                    // Replace existing posts with the updated content
                    $('#userRecordsscroll').html(response);
                } else {
                    // Append older posts to the existing content
                    $('#userRecordsscroll').append(response);
                }
                isLoading = false;
            },
            error: function(){
                // Handle error
                $('.loading-spinner').hide();
                isLoading = false;
            }
        });
    }

    // Function to handle scroll event
    $(window).scroll(function(){
        if(!isLoading && $(window).scrollTop() + $(window).height() >= $(document).height()){
            page++; // Increment the page number
            fetchPosts(); // Fetch older posts
        }
    });

    // Initial fetching of posts
    fetchPosts();
    </script>
</head>
<body>
    <div class="row">
        <input type="hidden" value="<?php echo $_SESSION['schoolid']; ?>" name="school_id" id="school_id">
        <div class="d-flex justify-content-center">
            <span class="username">Welcome <?php echo ucfirst(strtolower($userfullname)); ?> (<?php echo $studentrole; ?>)</span>
        </div>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="container mt-5">
              <div class="row">
    <div class="col-md-6 offset-md-3">
        <form id="addTimelineForm" enctype="multipart/form-data">
            <div class="form-group">
               <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="user_id" id="user_id">
                <!--<div class="custom-file">-->
                <!--    <input type="file" class="custom-file-input" id="photo" name="photo">-->
                <!--    <label class="custom-file-label" for="photo"><i class="fas fa-cloud-upload-alt"></i> Choose a photo</label>-->
                <!--</div>-->
                 <label for="subject">Subject</label>
                <select class="form-control" name="subjectq" id="subjectq">
                    <option value="">Please Select</option>
                   <?php  while ($subject = mysqli_fetch_array($getAllInfoSubject)) { ?>
                    <option value="<?php echo $subject['id']; ?>"><?php echo $subject['name']; ?></option>
                   
                   <?php } ?>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="quote">Ask a Question:</label>
                <textarea class="form-control" id="quote" name="quote" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Question</button>
        </form>
    </div>
</div>

<hr>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div id="userRecords"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div id="userRecordsscroll"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
