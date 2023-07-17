<?php 
session_start();
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
        $profile_image = $user['profile_image'];
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
    
$_SESSION['usertype'] = $usertype;
    $_SESSION['schoolid']= $schoolid;
    
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
        
    <?php  if($usertype == "3" || $usertype=="4"){ ?>
    
    <div class="PostHeader row mt-3">
      <div class="text-center">
        <div class="page-header-size">Sessions<a class="btn btn-primary d-inline textbook-add-button-css" href="addsession.php" style="margin-bottom: 8px;" fdprocessedid="fplcra">Add</a></div>
      </div>
    </div>
    <div class="row mb-1">
      <div class="col-1 col-sm-1 col-md-3 col-lg-3 col-xl-3"></div>
      <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 searchcourse text-center">
        <input type="text" class="form-control notebooksearchcontrol rounded-pill m-2 pr-5" placeholder="Enter Videos, PDF, Image, Subject" id="searchsessionInput">
      </div>
      <div class="col-1 col-sm-1 col-md-3 col-lg-3 col-xl-3"></div>
    </div>
      
    <?php } ?>

   
    </div>

    <div class="row mt-3">
    <div class="col-12">
        <table id="sessionTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Video/Image/PDF</th>
                    <th>Subject</th>
                    <th>Class/Division</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be dynamically added here -->
            </tbody>
        </table>
    </div>
</div>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    var sessionTable = $('#sessionTable').DataTable({
        columns: [
            { data: 'coverImage', orderable: false },
            { data: 'title' },
            { data: 'classDivision' },
            { data: 'description' },
            { data: 'actions', orderable: false }
        ]
    });

    // Function to handle delete confirmation
    function confirmDelete(event) {
        event.preventDefault();
        var deleteLink = $(event.currentTarget).attr('href');
        
        // Display confirmation dialog
        if (confirm("Are you sure you want to delete this record?")) {
            // Proceed with delete action
            window.location.href = deleteLink;
        }
    }

    // Function to search session records
    function searchsessionRecords(searchText) {
        sessionTable.search(searchText).draw();
    }

    // Load all session records
    $.ajax({
        url: 'search_session.php',
        type: 'POST',
        data: { searchText: '' },
        dataType: 'json',
    success: function(response) {
         var user_type = '<?php echo $usertype; ?>';
    if (response && response.length > 0) {
        $.each(response, function(index, record) {
            var title = record.title;
            var classDivision = record.classDivision;
            var description = record.description;
            var coverImage = '<a href="' + record.pdfLink + '"><img src="' + record.coverImage + '" alt="Cover Image" class="cover-image" /></a> <br> <a href="' + record.pdfLink + '">View PDF</a><br><a href="' + record.videoLink + '">View Video</a>';
            var actions = '';

            // Check if user_type is not 3 or 4 (student)
            if (user_type == '3' && user_type == '4') {
                actions = '<a href="edit_session.php?id=' + record.id + '">Edit</a> | <a href="delete_session.php?id=' + record.id + '" class="delete-link">Delete</a>';
            }

            sessionTable.row.add({ coverImage: coverImage, title: title, classDivision: classDivision, description: description, actions: actions }).draw(false);
        });
    }
},

        error: function(xhr, status, error) {
            console.error('AJAX request failed:', status, error);
        }
    });

    // Handle search input
    $('#searchsessionInput').on('keyup', function() {
        var searchText = $(this).val();
        searchsessionRecords(searchText);
    });

    // Handle delete link click
    $('#sessionTable').on('click', '.delete-link', confirmDelete);
});


</script>





