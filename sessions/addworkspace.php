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
      $getallsubjects = $axisclass->getAllInfo('subject');
      $getallclasses = $axisclass->getAllInfo('classes');
      $getalldivisions = $axisclass->getAllInfo('divisions');
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

<div class="row">
    <div class="justify-content-center">

 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Add Sessions</h5>
        </div>
        <div class="card-body">
      <form id="sessionadd">
   <div class="loader">
      <!-- Add your loader GIF here -->
      <img src="../assets/images/loader.gif" alt="Loader">
    </div>
    <p class="text-center text-medium-emphasis">Add New Sessions</p>

    <div class="col-12">
          <div class="row">
              <input type="hidden" value="<?php echo $schoolid; ?>" name="schoolid" id="schoolid">
              <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="userid" id="userid">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nationality">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <span class="error" id="titleError"></span>
                </div>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="subject">Class:</label>
                    <select class="form-control" name="class" id="class">
                        <option value="">Please select</option>
                        <?php while ($classa = mysqli_fetch_array($getallclasses)){
                           ?>
                           <option value="<?php echo $classa['id']; ?>"><?php echo $classa['class']; ?></option>
                           <?php
                          }
                        ?>
                    </select>
                    <span class="error" id="emailError"></span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="subject">Division:</label>
                    <select class="form-control" name="division" id="division">
                        <option value="">Please select</option>
                        <?php while ($divisiona = mysqli_fetch_array($getalldivisions)){
                           ?>
                           <option value="<?php echo $divisiona['id']; ?>"><?php echo $divisiona['divisions']; ?></option>
                           <?php
                          }
                        ?>
                    </select>
                    <span class="error" id="emailError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <select class="form-control" name="subject" id="subject">
                        <option value="">Please select</option>
                        <?php while ($subjecta = mysqli_fetch_array($getallsubjects)){
                           ?>
                           <option value="<?php echo $subjecta['id']; ?>"><?php echo $subjecta['name']; ?></option>
                           <?php
                          }
                        ?>
                    </select>
                    <span class="error" id="emailError"></span>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profileImage">Cover Image:</label>
                    <input type="file" class="form-control" id="coverImage" name="coverImage">
                    <span class="error" id="coverImageError"></span>
                </div>
            </div>
        </div>
        
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profileImage">Pdf File</label>
                    <input type="file" class="form-control" id="pdf_path" name="pdf_path">
                    <span class="error" id="pdf_pathError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profileImage">Video File</label>
                    <input type="file" class="form-control" id="video_path" name="pdf_path">
                    <span class="error" id="pdf_pathError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="country">Please Select:</label>
                   <select name="isprivate" id="isprivate" class="form-control">
                       <option value="">Please Select</option>
                       <option value="0">private</option>
                       <option value="1">public</option>
                   </select>
                    <span class="error" id="isprivate"></span>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea class="form-control" name="description" id="description"></textarea>
                    <span class="error" id="pdf_pathError"></span>
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
   
    
    
  </div>
  
</div>






    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Handle form submission
    $('#sessionadd').submit(function(e) {
      e.preventDefault(); // Prevent default form submission

      // Show loader
      $('.loader').show();

      // Get form data
      var formData = new FormData(this);

      // Add cover image file to form data
      var coverImage = $('#coverImage')[0].files[0];
      formData.append('coverImage', coverImage);

      // Add PDF file to form data
      var pdfFile = $('#pdf_path')[0].files[0];
      formData.append('pdfFile', pdfFile);
      
       // Add video file to form data
      var videoFile = $('#video_path')[0].files[0];
      formData.append('videoFile', videoFile);

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
    // Perform any additional actions or UI updates
    window.location.href = 'sessions.php';
  } else {
    alert("Error adding record: " + response);
  }
}
,
        error: function() {
          // Hide loader
          $('.loader').hide();

          // Handle error response
          console.error('AJAX request failed');
        }
      });
    });
  });
</script>
