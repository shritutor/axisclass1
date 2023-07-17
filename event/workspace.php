<?php

// include Function  file
include_once '../backend/function.php';
$axisclass = new DB_con();
$getAllInfoClass = $axisclass->getAllInfo('classes');
$getAllInfoDivision = $axisclass->getAllInfo('divisions');
$schoolid = "";
$getUserInfo = $axisclass->getAllInfoWhere('user', $_SESSION['uid']);
while ($user = mysqli_fetch_array($getUserInfo)) {
    $userfirstname = $user['first_name'];
    $usermiddlename = $user['middle_name'];
    $userlastname = $user['last_name'];
    $usertype = $user['users_type'];
    $schoolid = $user['schools_id'];
    $email = $user['email'];
    $phone = $user['phone'];
    $gender = $user['gender'];

    $dateofbirth = $user['dateofbirth'];
    $nationality = $user['nationality'];
    $aadharid = $user['aadharid'];
    $area = $user['area'];
    $mpcity = $user['city'];
    $state = $user['state'];
    $country = $user['country'];
    $profile_image = $user['profile_image'];
}

$getSchoolInfo = $axisclass->getAllInfoWhere('schools', $schoolid);

while ($school = mysqli_fetch_array($getSchoolInfo)) {
    $schoolname = $school['schoolname'];
    $udisenumber = $school['udisenumber'];
    $registrationnumber = $school['registrationnumber'];
    $areaname = $school['areaname'];
    $scity = $school['city'];
    $semail = $school['email'];
    $phonenumber = $school['phonenumber'];
    $imageurl = $school['imageurl'];
    $spincode = $school['pincode'];
    $Principal = $school['Principal'];
    $VicePrincipal = $school['VicePrincipal'];
    $Incharge = $school['Incharge'];
    $WorkingYearstartDate = $school['WorkingYearstartDate'];
    $WorkingYearEndDate = $school['WorkingYearEndDate'];
}

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

$_SESSION['schoolid'] = $schoolid;

?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

<style>
    .username {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
    .profile-card-list-css {
    background-image: url(../assets/images/profile-background.879fbc11.jpg);
    height: auto;
    background-repeat: round;
    border-radius: 0;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    margin-top: 15px;
    margin-right: 3px;
    margin-left: 3px;
    color: #fff;
}
.myprofile {
    margin-top: 50px;
    margin-bottom: 50px;
}
.postsearchheader {
    color: #fff;
    font-size: 22px;
    font-weight: 600;
}
.join-school-add-button-css, .textbook-add-button-css {
    color: #fff;
    font-weight: 500;
    width: 60px;
    font-size: 12px;
    border-radius: 30px;
    height: 27px;
    text-align: center;
    line-height: 10px;
    border-width: 1px;
    border-color: #fff;
    background-color: #5a55ca;
    margin-left: 1rem;
}



.input-group {
  position: relative;
  max-width: 400px;
}

.form-control {
  border-radius: 30px !important;
}

.search-icon {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  border: 2px solid currentColor;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.search-icon::before {
  position: absolute;
  top: 50%;
  left: 50%;
  content: "";
  width: 8px;
  height: 8px;
  background-color: currentColor;
  border-radius: 50%;
  transform: translate(-50%, -50%) scale(0);
  transition: all 0.3s ease;
}

.timeline-header-css {
    background-image: url(../assets/images/BackgroundImage.e89866af.png);
    height: auto;
    background-repeat: round;
    border-radius: 0;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
    width: 99%;
    margin: auto;
}
.page-header-size {
    color: #fff;
    font-size: 24px;
    font-weight: 600;
}
.assigncard, .friendcard {
    background-color: #f2f4f8;
    border-radius: 10px;
    width: 98%;
    margin: auto;
}
.cover-image {
  width: 200px; /* Adjust the desired width */
  height: 200px; /* Adjust the desired height */
}
</style>



<div class="row">
  <div class="justify-content-center">


    <div class="card timeline-header-css">
      <div class="PostHeader row mt-3">
        <div class="text-center">
          <div class="page-header-size">Events<a class="btn btn-primary d-inline textbook-add-button-css" href="addevent.php" style="margin-bottom: 8px;" fdprocessedid="fplcra">Add</a></div>
        </div>
      </div>
      <div class="row mb-1">
        <div class="col-1 col-sm-1 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 searchcourse text-center">
          <input type="text" class="form-control notebooksearchcontrol rounded-pill m-2 pr-5" placeholder="Search Events" id="searchLibraryInput">
        </div>
        <div class="col-1 col-sm-1 col-md-3 col-lg-3 col-xl-3"></div>
      </div>

      <div class="row mt-2 mb-3">
        <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
        <div class="text-center col-10 col-sm-10 col-md-8 col-lg-8 col-xl-8">
          <button class="btn btn-primary rounded-pill groupbutton groupbutton-active m-1 library-view" type="button" data-view="my-library">All</button>
          <button class="btn btn-primary rounded-pill groupbutton m-1 library-view" type="button" data-view="upcoming">Upcoming</button>
           <button class="btn btn-primary rounded-pill groupbutton m-1 library-view" type="button" data-view="history">History</button>
        </div>
        <div class="col-1 col-sm-1 col-md-2 col-lg-2 col-xl-2"></div>
      </div>
    </div>
    <BR>
    <div class="row calendersrow" >

        <div class="col-md-8" style="background-color : #523adb; color:white">
    <div class="content">
         <div id='calendar'></div>
      </div>
      </div>
      <div class="col-md-4">
          <div class="eventDescription" id="eventDescription">

          </div>
      </div>
    </div>




  </div>
</div>
<div class="row">
<div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Add Event</h5>
        </div>
        <div class="card-body">
            <!-- Add an empty table for displaying the records -->
<table id="recordsTable" class="display" style="width:100%">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Cover Image</th>
      <th>Is Private</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody></tbody>
</table>
            </div>
            </div>
            </div>
</div>

 <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src='../assets/fullcalendar/packages/core/main.js'></script>
    <script src='../assets/fullcalendar/packages/interaction/main.js'></script>
    <script src='../assets/fullcalendar/packages/daygrid/main.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function() {
  // Initialize DataTable
  var dataTable = $('#recordsTable').DataTable();

  // Function to fetch and load the records
  function loadRecords(view) {
    // Clear existing records
    dataTable.clear().draw();

    // Fetch records from the server
    $.ajax({
      url: 'fetch_records.php',
      type: 'GET',
      data: { view: view }, // Pass the view parameter to the server-side script
      dataType: 'json',
      success: function(response) {
        // Add each record to the DataTable
        response.forEach(function(record) {
          var isPrivate = record.is_private == 0 ? "Private" : "Public";

          var row = [
            'Title : ' + record.title + '<br>Start date: ' + record.start +
            '<br>End date: ' + record.end,
            record.description,
            '<img src="' + record.coverimage_path + '" width="50px" height="50px" />',
            isPrivate,
            '<button class="editButton" data-id="' + record.id + '">Edit</button>' +
            '<button class="deleteButton" data-id="' + record.id + '">Delete</button>' +
            '<button class="shareButton" data-id="' + record.id + '">Share</button>'
          ];
          dataTable.row.add(row).draw();
        });
      },
      error: function() {
        console.error('Failed to fetch records from the server');
      }
    });
  }

  // Load records on page load
  loadRecords('my-library'); // Load default records

// Button click event handlers
$('.groupbutton').click(function() {
  var view = $(this).data('view');
  var id = $(this).data('id'); // Retrieve the 'id' attribute value

  console.log(view + ' Button clicked');
  console.log('ID: ' + id);
  $('.calendersrow').hide();
  // Perform action based on the selected view and id
  loadRecords(view, id);
});
 });


  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var descriptionEl = document.getElementById('eventDescription');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid' ],
      defaultDate: '2023-05-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events,
      events: {
        url: 'fetch_events.php', // Replace with the actual URL of your PHP script
        method: 'GET',
        failure: function() {
          alert('Failed to fetch events from the database.');
        }
      },
      eventClick: function(info) {
        // Get the clicked event's title and description
        var title = info.event.title;
        var description = info.event.extendedProps.description;

        // Update the description div with the event details
        descriptionEl.innerHTML = '<h3>' + title + '</h3><p>' + description + '</p>';
      }
    });

    calendar.render();
  });
</script>


    <script src="../assets/js/main.js"></script>
