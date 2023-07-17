<?php 
session_start();
// include Function file
include_once('../backend/function.php');
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
   body {
  background-color: #f4f7f6;
  margin-top: 20px;
}

.card {
  background: #fff;
  transition: 0.5s;
  border: 0;
  margin-bottom: 30px;
  border-radius: 0.55rem;
  position: relative;
  width: 100%;
  box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}

.chat-app .people-list {
  width: 280px;
  position: absolute;
  left: 0;
  top: 0;
  padding: 20px;
  z-index: 7;
}

.chat-app .chat {
  margin-left: 280px;
  border-left: 1px solid #eaeaea;
}

.people-list {
  -moz-transition: 0.5s;
  -o-transition: 0.5s;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}

.people-list .chat-list li {
  padding: 10px 15px;
  list-style: none;
  border-radius: 3px;
}

.people-list .chat-list li:hover {
  background: #efefef;
  cursor: pointer;
}

.people-list .chat-list li.active {
  background: #efefef;
}

.people-list .chat-list li .name {
  font-size: 15px;
}

.people-list .chat-list img {
  width: 45px;
  border-radius: 50%;
}

.people-list img {
  float: left;
  border-radius: 50%;
}

.people-list .about {
  float: left;
  padding-left: 8px;
}

.people-list .status {
  color: #999;
  font-size: 13px;
}

.chat .chat-header {
  padding: 15px 20px;
  border-bottom: 2px solid #f4f7f6;
}

.chat .chat-header img {
  float: left;
  border-radius: 40px;
  width: 40px;
}

.chat .chat-header .chat-about {
  float: left;
  padding-left: 10px;
}

.chat .chat-history {
  padding: 20px;
  border-bottom: 2px solid #fff;
}

.chat .chat-history ul {
  padding: 0;
}

.chat .chat-history ul li {
  list-style: none;
  margin-bottom: 30px;
}

.chat .chat-history ul li:last-child {
  margin-bottom: 0px;
}

.chat .chat-history .message-data {
  margin-bottom: 15px;
}

.chat .chat-history .message-data img {
  border-radius: 40px;
  width: 40px;
}

.chat .chat-history .message-data-time {
  color: #434651;
  padding-left: 6px;
}

.chat .chat-history .message {
  color: #444;
  padding: 18px 20px;
  line-height: 26px;
  font-size: 16px;
  border-radius: 7px;
  display: inline-block;
  position: relative;
}

.chat .chat-history .message:after {
  bottom: 100%;
  left: 7%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #fff;
  border-width: 10px;
  margin-left: -10px;
}

.chat .chat-history .my-message {
  background: #efefef;
}

.chat .chat-history .my-message:after {
  bottom: 100%;
  left: 30px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #efefef;
  border-width: 10px;
  margin-left: -10px;
}

.chat .chat-history .other-message {
  background: #e8f1f3;
  text-align: right;
}

.chat .chat-history .other-message:after {
  border-bottom-color: #e8f1f3;
  left: 93%;
}

.chat .chat-message {
  padding: 20px;
}

.online,
.offline,
.me {
  margin-right: 2px;
  font-size: 8px;
  vertical-align: middle;
}

.online {
  color: #86c541;
}

.offline {
  color: #e47297;
}

.me {
  color: #1d8ecd;
}

.float-right {
  float: right;
}

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

@media only screen and (max-width: 767px) {
  .chat-app .people-list {
    height: 465px;
    width: 100%;
    overflow-x: auto;
    background: #fff;
    left: -400px;
    display: none;
  }
  .chat-app .people-list.open {
    left: 0;
  }
  .chat-app .chat {
    margin: 0;
  }
  .chat-app .chat .chat-header {
    border-radius: 0.55rem 0.55rem 0 0;
  }
  .chat-app .chat-history {
    height: 300px;
    overflow-x: auto;
  }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
  .chat-app .chat-list {
    height: 650px;
    overflow-x: auto;
  }
  .chat-app .chat-history {
    height: 600px;
    overflow-x: auto;
  }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
  .chat-app .chat-list {
    height: 480px;
    overflow-x: auto;
  }
  .chat-app .chat-history {
    height: calc(100vh - 350px);
    overflow-x: auto;
  }
}

/* Custom styling for the chat input */
.chat-message .input-group {
  margin-top: 10px;
}

.chat-message .form-control {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.chat-message .input-group-append {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.chat-message #send-button {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.message-data.text-left {
  float: left;
}

.message-data.text-right {
  float: right;
}

.message-data-time {
  display: block;
  font-size: 12px;
  color: #999;
  margin-top: 4px;
}
.chat-history {
  overflow-y: auto;
  max-height: 400px; /* Adjust the maximum height as needed */
}

.chat-list {
  overflow-y: auto;
  max-height: 400px; /* Adjust the maximum height as needed */
}
.chat-history ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.chat-history ul li {
  margin-bottom: 10px;
}

.chat-history ul li.clearfix::after {
  content: "";
  display: table;
  clear: both;
}

.chat-history ul li.me .message-data {
  float: right;
  text-align: right;
}

.chat-history ul li.me .message-data .message {
  background: #2ecc71;
  color: white;
}

.chat-history ul li.other .message-data {
  float: left;
  text-align: left;
}

.chat-history ul li.other .message-data .message {
  background: #3498db;
  color: white;
}

</style>
    <!-- end of the css-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    var selectedPerson = null;

    // Function to load chat data from the server
 // Function to load chat data from the server
function loadChatData() {
  $.ajax({
    url: 'get_chat_data.php',
    type: 'GET',
    dataType: 'json',
    success: function(response) {
      // Process the retrieved chat data
      renderChatData(response);
      // Attach click event handler to chat list items
      $('.chat-list').on('click', 'li', function() {
        var index = $(this).index();
        selectedPerson = response[index];
        renderChatWindow(selectedPerson);
      });

      // Check if there's a selected person (e.g., after page refresh)
      if (selectedPerson) {
        renderChatWindow(selectedPerson);
      }
    },
    error: function() {
      console.log('Error occurred while loading chat data');
    }
  });
}



    // Function to render the chat data on the page
    function renderChatData(chatData) {
      // Clear the chat list and messages
      $('.chat-list').empty();
      $('.chat-history ul').empty();

      // Render the chat list
      chatData.forEach(function(person) {
        var chatListItem = $('<li>').addClass('clearfix');
        var avatar = $('<img>').attr('src', person.avatar).attr('alt', person.name);
        var about = $('<div>').addClass('about');
        var name = $('<div>').addClass('name').text(person.name);
        var status = $('<div>').addClass('status').html('<i class="fa fa-circle ' + (person.online ? 'online' : 'offline') + '"></i> ' + person.status);

        about.append(name, status);
        chatListItem.append(avatar, about);
        $('.chat-list').append(chatListItem);
      });
    }

    // Function to render the chat window for the selected person
   // Function to render the chat window for the selected person
function renderChatWindow(selectedPerson) {
  // Clear the chat history
  $('.chat-history ul').empty();

  // Check if the selectedPerson and messages array exist
  if (selectedPerson && selectedPerson.messages) {
    // Render the selected person's chat messages
    selectedPerson.messages.forEach(function(message) {
      var messageItem = $('<li>').addClass('clearfix');
      var messageData = $('<div>').addClass('message-data ' + (message.sender === 'me' ? 'text-right' : ''));
      var messageAvatar = $('<img>').attr('src', message.sender === 'me' ? '<?php echo "https://tutorpark.co/axisclass/myprofile/".$_SESSION["profile_pic"]; ?>' : selectedPerson.avatar).attr('alt', message.sender === 'me' ? 'Me' : selectedPerson.name);
      var messageText = $('<div>').addClass('message ' + (message.sender === 'me' ? 'my-message' : 'other-message')).text(message.text);
      var messageTime = $('<span>').addClass('message-data-time').text(message.time);

      messageData.append(messageAvatar, messageText);
      messageItem.append(messageData, messageTime);
      $('.chat-history ul').append(messageItem);
    });
  } else {
    // Render a placeholder message if no messages are available
    $('.chat-history ul').append($('<li>').text('No messages available.'));
  }

  // Update the selected person's details in the chat header
  $('#selected-avatar').attr('src', selectedPerson.avatar);
  $('#selected-name').text(selectedPerson.name);
  $('#selected-last-seen').text('Last seen: ' + selectedPerson.lastSeen);
}


    // Function to send a message to the selected person
    function sendMessage(selectedPerson) {
      var messageText = $('#recipient-input').val().trim();

      if (messageText === '') {
        return;
      }

      var data = {
        senderId: '<?php echo $_SESSION["uid"]; ?>', // Add the sender's ID here
        recipientId: selectedPerson.id,
        messageText: messageText
      };

      $.ajax({
        url: 'send_message.php',
        type: 'POST',
        data: data,
        dataType: 'json',
        success: function(response) {
          if (response.success) {
            console.log('Message sent successfully!');
            updateChatWindow({
              sender: 'me',
              time: getCurrentTime(),
              text: messageText,
              senderAvatar: '<?php echo "https://tutorpark.co/axisclass/myprofile/".$_SESSION["profile_pic"]; ?>' // Add the sender's profile picture here
            });
          } else {
            console.log('Error occurred while sending the message');
          }
        },
        error: function() {
          console.log('Error occurred while sending the message');
        }
      });

      $('#recipient-input').val('');
    }

    // Function to update the chat window with a new message
   // Function to update the chat window with a new message
function updateChatWindow(message) {
  var messageItem = $('<li>').addClass('clearfix');
  var messageData = $('<div>').addClass('message-data');
  var messageAvatar = $('<img>').attr('src', message.sender === 'me' ? '<?php echo "https://tutorpark.co/axisclass/myprofile/".$_SESSION["profile_pic"]; ?>' : selectedPerson.avatar).attr('alt', message.sender === 'me' ? 'Me' : selectedPerson.name);
  var messageText = $('<div>').addClass('message ' + (message.sender === 'me' ? 'my-message' : 'other-message')).text(message.text);
  var messageTime = $('<span>').addClass('message-data-time').text(message.time);

  messageData.append(messageText, messageTime);
  messageItem.append(messageAvatar, messageData);

  if (message.sender === 'me') {
    messageItem.addClass('me');
  } else {
    messageItem.addClass('other');
  }

  $('.chat-history ul').append(messageItem);
}

    // Function to get the current time in a specific format (e.g., HH:MM AM/PM)
    function getCurrentTime() {
      var date = new Date();
      var hours = date.getHours();
      var minutes = date.getMinutes();
      var ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12; // Handle midnight (0 hours)
      minutes = minutes < 10 ? '0' + minutes : minutes;
      var currentTime = hours + ':' + minutes + ' ' + ampm;
      return currentTime;
    }

    // Attach a click event handler to the send button
    $('#send-button').on('click', function() {
      if (selectedPerson) {
        sendMessage(selectedPerson);
      }
    });

    // Attach a keydown event handler to the message input field to handle Enter key press
    $('#recipient-input').on('keydown', function(event) {
      if (event.which === 13) {
        event.preventDefault(); // Prevent the default behavior of the Enter key
        if (selectedPerson) {
          sendMessage(selectedPerson);
        }
      }
    });

    // Attach a click event handler to the select button
    $('#select-button').on('click', function() {
      var recipient;
      if (selectedPerson) {
        recipient = selectedPerson.id;
      }
      console.log(recipient);
      // Perform validation and error handling if needed

      // Set the selectedPerson variable to the selected recipient
      selectedPerson = { id: recipient };
      renderChatWindow(selectedPerson);
    });

    // Load chat data when the page is ready
    loadChatData();
  });
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
   
    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-lg-12">-->
    <!--            <div class="card chat-app">-->
    <!--                <div id="plist" class="people-list">-->
    <!--                    <div class="input-group mb-3">-->
    <!--                        <span class="input-group-text"><i class="fa fa-search"></i></span>-->
    <!--                        <input type="text" class="form-control" placeholder="Search...">-->
    <!--                    </div>-->
    <!--                    <ul class="list-unstyled chat-list mt-2 mb-0">-->
                            <!-- User list will be dynamically populated here -->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--                <div class="chat">-->
    <!--                    <div class="chat-header clearfix">-->
    <!--                        <div class="row">-->
    <!--                            <div class="col-lg-6">-->
    <!--                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">-->
    <!--                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">-->
    <!--                                </a>-->
    <!--                                <div class="chat-about">-->
    <!--                                    <h6 class="m-0">Aiden Chavez</h6>-->
    <!--                                    <small>Last seen: 2 hours ago</small>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            <div class="col-lg-6 text-end">-->
    <!--                                <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>-->
    <!--                                <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>-->
    <!--                                <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>-->
    <!--                                <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="chat-history">-->
    <!--                        <ul class="list-unstyled m-0">-->
                                <!-- Chat history will be dynamically populated here -->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="chat-message clearfix">-->
    <!--                        <div class="input-group">-->
    <!--                            <input type="text" class="form-control" placeholder="Enter text here...">-->
    <!--                            <div class="input-group-append">-->
    <!--                                <span class="input-group-text"><i class="fa fa-send"></i></span>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
   
   
<!--   <div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <div class="card chat-app">-->
<!--                <div id="plist" class="people-list">-->
<!--                    <div class="input-group mb-3">-->
<!--                        <span class="input-group-text"><i class="fa fa-search"></i></span>-->
<!--                        <input type="text" class="form-control" placeholder="Search...">-->
<!--                    </div>-->
<!--                    <ul class="list-unstyled chat-list mt-2 mb-0">-->
<!--                        <li class="clearfix">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Vincent Porter</div>-->
<!--                                <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="clearfix active">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Aiden Chavez</div>-->
<!--                                <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="clearfix">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Mike Thomas</div>-->
<!--                                <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="clearfix">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Christian Kelly</div>-->
<!--                                <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="clearfix">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Monica Ward</div>-->
<!--                                <div class="status"> <i class="fa fa-circle online"></i> online </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                        <li class="clearfix">-->
<!--                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">-->
<!--                            <div class="about">-->
<!--                                <div class="name">Dean Henry</div>-->
<!--                                <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div>-->
<!--                            </div>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="chat">-->
<!--                    <div class="chat-header clearfix">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-6">-->
<!--                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">-->
<!--                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">-->
<!--                                </a>-->
<!--                                <div class="chat-about">-->
<!--                                    <h6 class="m-0">Aiden Chavez</h6>-->
<!--                                    <small>Last seen: 2 hours ago</small>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6 text-end">-->
<!--                                <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>-->
<!--                                <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>-->
<!--                                <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>-->
<!--                                <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="chat-history">-->
<!--                        <ul class="list-unstyled m-0">-->
<!--                            <li class="clearfix">-->
<!--                                <div class="message-data text-end">-->
<!--                                    <span class="message-data-time">10:10 AM, Today</span>-->
<!--                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">-->
<!--                                </div>-->
<!--                                <div class="message other-message float-end"> Hi Aiden, how are you? How is the project coming along? </div>-->
<!--                            </li>-->
<!--                            <li class="clearfix">-->
<!--                                <div class="message-data">-->
<!--                                    <span class="message-data-time">10:12 AM, Today</span>-->
<!--                                </div>-->
<!--                                <div class="message my-message">Are we meeting today?</div>-->
<!--                            </li>-->
<!--                            <li class="clearfix">-->
<!--                                <div class="message-data">-->
<!--                                    <span class="message-data-time">10:15 AM, Today</span>-->
<!--                                </div>-->
<!--                                <div class="message my-message">Project has been already finished and I have results to show you.</div>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="chat-message clearfix">-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" class="form-control" placeholder="Enter text here...">-->
<!--                            <div class="input-group-append">-->
<!--                                <span class="input-group-text"><i class="fa fa-send"></i></span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

   
   
   
   
   

<div class="container">
    <div class="row clearfix">
      <div class="col-lg-12">
        <div class="card chat-app">
          <div id="plist" class="people-list">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Search...">
            </div>
            <ul class="list-unstyled chat-list mt-2 mb-0"></ul>
          </div>
          <div class="chat">
            <div class="chat-header clearfix">
              <div class="row">
                <div class="col-lg-6">
                  <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                    <img id="selected-avatar" src="" alt="">
                  </a>
                  <div class="chat-about">
                    <h6 class="m-b-0" id="selected-name"></h6>
                    <small id="selected-last-seen"></small>
                  </div>
                </div>
                <div class="col-lg-6 hidden-sm text-right">
                  <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                  <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                  <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                  <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                </div>
              </div>
            </div>
            <div class="chat-history">
              <ul class="m-b-0"></ul>
            </div>
           <div class="chat-message clearfix">
  <div class="input-group mb-0">
    <!--<div class="input-group-prepend">-->
    <!--  <span class="input-group-text"><i class="fa fa-send"></i></span>-->
    <!--</div>-->
    <!--<input type="text" class="form-control" id="message-input" placeholder="Enter text here...">-->
    <!--<div class="input-group">-->
  <input type="text" class="form-control" id="recipient-input" placeholder="Recipient">
  <div class="input-group-append">
    <button id="send-button" class="btn btn-primary">Select</button>
  </div>
</div>


  </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>

        </div>
    </div>
    
    


    
</body>
</html>
