<?php 

// include Function  file
    include_once('../backend/function.php');
    $axisclass = new DB_con();
    $getAllInfoClass = $axisclass->getAllInfo('classes');
    $getAllInfoDivision = $axisclass->getAllInfo('divisions');
    $schoolid = "";
    $getUserInfo = $axisclass->getAllInfoWhere('user',$_SESSION['uid']);
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
    }
    
    

    
    $getSchoolInfo = $axisclass->getAllInfoWhere('schools',$schoolid);
    
    
    
    
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
    
    
    $userfullname = $userfirstname." ".$usermiddlename." ".$userlastname;
    $studentrole="";
    if($usertype == "2"){
        $studentrole = "monitor";
    }
    else if($usertype == "3"){
        $studentrole = "Class Teacher";
    }
    else if($usertype =="4"){
        $studentrole = "Subject Teacher";
    }
    else if($usertype == "5")
    {
        $studentrole = "Correspondent";
    }
    else{
        $studentrole = "student";
    }
    

    
      $getallsubjects = $axisclass->getAllInfo('subject');
?>
 <style>
    .loader {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999;
    }
  </style>
<style>
    .username {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
    
</style>
<!-- Include the necessary CSS and JS files for DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<div class="row">
    <div class="justify-content-center">

 <div class="container">
  <div class="row">
      
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Add Event</h5>
        </div>
        <div class="card-body">
     <form id="eventadd">
  <div class="loader">
    <!-- Add your loader GIF here -->
    <img src="../assets/images/loader.gif" alt="Loader">
  </div>
  <p class="text-center text-medium-emphasis">Add New Event</p>

  <div class="col-12">
    <div class="row">
      <input type="hidden" value="<?php echo $schoolid; ?>" name="schoolid" id="schoolid">
      <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="userid" id="userid">
      <div class="col-md-6">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" name="title">
          <span class="error" id="titleError"></span>
        </div>
      </div>
         <div class="col-md-6">
        <div class="form-group">
          <label for="coverImage">Cover Image:</label>
          <input type="file" class="form-control" id="coverImage" name="coverImage">
          <span class="error" id="coverImageError"></span>
        </div>
      </div>
  
    </div>

    <div class="row">
     
   
          <div class="col-md-6">
        <div class="form-group">
          <label for="startDateTime">Start Date and Time:</label>
          <input type="datetime-local" class="form-control" id="startDateTime" name="startDateTime">
          <span class="error" id="startDateTimeError"></span>
        </div>
      </div>
      
       <div class="col-md-6">
        <div class="form-group">
          <label for="endDateTime">End Date and Time:</label>
          <input type="datetime-local" class="form-control" id="endDateTime" name="endDateTime">
          <span class="error" id="endDateTimeError"></span>
        </div>
      </div>
      
      
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea class="form-control" name="description" id="description"></textarea>
          <span class="error" id="descriptionError"></span>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="isprivate">Please Select:</label>
          <select name="isprivate" id="isprivate" class="form-control">
            <option value="">Please Select</option>
            <option value="0">Private</option>
            <option value="1">Public</option>
          </select>
          <span class="error" id="isprivateError"></span>
        </div>
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-md-12">
        <button id="signupButton" type="submit" class="btn btn-primary form-control">Add</button>
      </div>
    </div>
  </div>
</form>

        </div>
      </div>
    </div>
   
   
    <div class="col-md-6">
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
  
</div>






    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    // Initialize DataTable
    var dataTable = $('#recordsTable').DataTable();

    // Function to fetch and load the records
    function loadRecords() {
      // Clear existing records
      dataTable.clear().draw();

      // Fetch records from the server
      $.ajax({
        url: 'fetch_records.php', // Replace with your server-side script URL
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          // Add each record to the DataTable
         response.forEach(function(record) {
  var isPrivate = record.is_private == 0 ? "Private" : "Public";

  var row = [
    'Title : '+record.title+'<BR>Start date : '+record.start+
    '<BR>End_date : '+record.end,
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
    loadRecords();

    // Handle form submission
    $('#eventadd').submit(function(e) {
      e.preventDefault(); // Prevent default form submission

      // Show loader
      $('.loader').show();

      // Get form data
      var formData = new FormData(this);

      // Add cover image file to form data
      var coverImage = $('#coverImage')[0].files[0];
      formData.append('coverImage', coverImage);

      // Send AJAX request
      $.ajax({
        url: 'add_records.php', // Replace with your server-side script URL
        type: 'POST',
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
          // Hide loader
          $('.loader').hide();

          // Handle success response
          if (parseInt(response) === 1) {
            alert("Record added successfully");
            // Clear the form inputs
            $('#eventadd')[0].reset();
            // Reload the DataTable to display the updated records
            loadRecords();
          } else {
            alert("Error adding record: " + response);
          }
        },
        error: function() {
          // Hide loader
          $('.loader').hide();

          // Handle error response
          console.error('AJAX request failed');
        }
      });
    });

    // Edit button click event
    $('#recordsTable').on('click', '.editButton', function() {
      var recordId = $(this).data('id');
      // Redirect to the edit page with the record ID
      window.location.href = 'edit_event.php?id=' + recordId;
    });

    // Delete button click event
    $('#recordsTable').on('click', '.deleteButton', function() {
      var recordId = $(this).data('id');
      // Show confirmation dialog
      if (confirm("Are you sure you want to delete this record?")) {
        // Send AJAX request to delete the record
        $.ajax({
          url: 'delete_event.php', // Replace with your server-side script URL
          type: 'POST',
          data: { id: recordId },
          dataType: 'json',
          success: function(response) {
            if (parseInt(response) === 1) {
              alert("Record deleted successfully");
              // Reload the DataTable to display the updated records
              loadRecords();
            } else {
              alert("Error deleting record: " + response);
            }
          },
          error: function() {
            console.error('AJAX request failed');
          }
        });
      }
    });

    // Share button click event
    $('#recordsTable').on('click', '.shareButton', function() {
      var recordId = $(this).data('id');
      // Redirect to the share page with the record ID
      window.location.href = 'share_record.php?id=' + recordId;
    });
  });
</script>
