<?php

// include Function file
include_once '../backend/function.php';
$axisclass = new DB_con();
$getAllInfoClass = $axisclass->getAllInfo('classes');
$getAllInfoDivision = $axisclass->getAllInfo('divisions');

$getUserInfo = $axisclass->getAllInfoWhere('user', $_SESSION['uid']);
while ($user = mysqli_fetch_array($getUserInfo)) {
    $userfirstname = $user['first_name'];
    $usermiddlename = $user['middle_name'];
    $userlastname = $user['last_name'];
    $usertype = $user['users_type'];
    $schoolid = $user['schools_id'];
    $profilepic = $user['profile_image'];
    $classes_id = $user['classes_id'];
    $divisions_id = $user['divisions_id'];
}

$_SESSION['profile_pic'] = $profilepic;

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
$_SESSION['classesid'] = $classes_id;
$_SESSION['divisionsid'] = $divisions_id;
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
    .chat-container {
      height: 100vh;
    }

    .chat-sidebar {
      background-color: #ededed;
      border-right: 1px solid #ccc;
      padding: 15px 0;
      height: 100%;
      overflow-y: auto;
    }

    .chat-sidebar .list-group-item {
      cursor: pointer;
      border: none;
      border-bottom: 1px solid #ccc;
      padding: 10px 20px;
    }

    .chat-sidebar .list-group-item:last-child {
      border-bottom: none;
    }

    .chat-sidebar .list-group-item.active {
      background-color: #fff;
      font-weight: bold;
    }

    .chat-content {
      background-color: #f5f5f5;
      height: 100%;
      overflow-y: auto;
      padding: 20px;
    }

    .chat-message {
      margin-bottom: 15px;
    }

    .chat-message .message-text {
      background-color: #fff;
      border-radius: 10px;
      padding: 10px 15px;
      font-size: 14px;
      max-width: 70%;
    }

    .chat-message .message-time {
      font-size: 12px;
      color: #999;
      margin-top: 5px;
    }

    .chat-input {
      background-color: #fff;
      padding: 15px;
      border-top: 1px solid #ccc;
    }

    .chat-input input[type="text"] {
      border: none;
      border-radius: 30px;
      padding: 10px 20px;
      width: 100%;
      outline: none;
      font-size: 14px;
    }

    .chat-input button {
      margin-left: 10px;
    }
  </style>
    <!-- end of the css-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




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



                <div class="container-fluid chat-container">
                  <div class="row">
                    <div class="col-md-4 chat-sidebar">
                      <div class="list-group users-list">
                        <!-- Users will be dynamically added here -->
                      </div>
                    </div>
                    <div class="col-md-8 chat-content">
                      <div class="chat-messages">
                        <!-- Messages for selected user will be dynamically added here -->
                      </div>
                      <div class="chat-input">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Type a message">
                          <button class="btn btn-primary" type="button">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

  </div>

        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script>
$(document).ready(function() {
  // Make an AJAX request to get the list of users
  $.ajax({
    url: 'get_user_list.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      // Handle the response data
      if (response && response.length > 0) {
        // Loop through the users and display them
        response.forEach(function(user) {
          var userName = user.name;
          var userId = user.id;
          var userAvatar = "http://localhost:8080/jeeyartechnology/axisclass.com/myprofile/" + user.profile_image;
          var lastSeen = user.last_seen;
          var onlineStatus = user.online;

          // Create a list item for each user
          var listItem = $('<a href="#" class="list-group-item list-group-item-action">').html(
            $('<div class="d-flex align-items-center">').append(
              $('<div class="avatar me-2">').html(
                $('<img>').attr('src', userAvatar).attr('alt', userName).attr('width', '40').attr('height', '40')
              )
            ).append(
              $('<div>').append(
                $('<h6 class="mb-0">').text(userName)
              ).append(
                $('<small>').text('Last seen: ' + lastSeen)
              ).append(
                $('<small>').text(onlineStatus ? 'Online' : 'Offline')
              )
            )
          ).data('userId', userId);

          // Append the list item to the users list
          $('.users-list').append(listItem);
        });
      } else {
        // No users found
        $('.users-list').append('<p>No users found.</p>');
      }
    },
    error: function() {
      console.error('Failed to fetch users.');
    }
  });

  // Handle click event on a user in the list
  $(document).on('click', '.users-list .list-group-item', function() {
    var userId = $(this).data('userId');
    // Perform necessary actions for the selected user
    // e.g., load the chat messages for the selected user
  });
});

</script>

</body>
</html>
