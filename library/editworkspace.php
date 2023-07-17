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
    

    
      $getallsubjects = $axisclass->getAllInfo('subject');
      $libraryid = $_GET['id'];
     
      $_SESSION['libraryid'] = $libraryid;
      $getalllibrary = $axisclass->getAllInfoWhere('library',$libraryid);
     
      while ($library = mysqli_fetch_array($getalllibrary)){
            $title = $library['title'];
            $coverimage_path = $library['coverimage_path'];
            $pdf_path = $library['pdf_path'];
            $is_private = $library['is_private'];
            $description = $library['description'];
            $subject_id = $library['subject_id'];
      }
                       
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
          <h5 class="card-title">Update Library</h5>
        </div>
        <div class="card-body">
      <form id="libraryupdate">
   <div class="loader">
      <!-- Add your loader GIF here -->
      <img src="../assets/images/loader.gif" alt="Loader">
    </div>
    <p class="text-center text-medium-emphasis">Update Labrary</p>

    <div class="col-12">
          <div class="row">
              <input type="hidden" value="<?php echo $schoolid; ?>" name="schoolid" id="schoolid">
              <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="userid" id="userid">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nationality">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
                    <span class="error" id="titleError"></span>
                </div>
            </div>
        </div>
      <div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject">Subject:</label>
            <select class="form-control" name="subject" id="subject">
                <option value="">Please select</option>
                <?php
                while ($subjecta = mysqli_fetch_array($getallsubjects)) {
                    $selected = ($subject_id == $subjecta['id']) ? 'selected' : '';
                    echo '<option value="' . $subjecta['id'] . '" ' . $selected . '>' . $subjecta['name'] . '</option>';
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
                    <img src="<?php echo $coverimage_path; ?>" width="100" height="100">
                   
                    <span class="error" id="coverImageError"></span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profileImage">Pdf File</label>
                    <?php
                    if (!empty($pdf_path)) {
                        echo '<embed src="' . $pdf_path . '" type="application/pdf" width="100%" height="600px" />';
                    } else {
                        echo 'No PDF file uploaded.';
                    }
                    ?>
                    <input type="file" class="form-control" id="pdf_path" name="pdf_path">
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
                <option value="0" <?php if($is_private=="0"){echo "selected";} ?>>private</option>
                <option value="1" <?php if($is_private=="1"){echo "selected";} ?>>public</option>
            </select>
            <span class="error" id="isprivate"></span>
        </div>
    </div>
</div>

         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="description">Description</label>
                   <textarea class="form-control" name="description" id="description"><?php echo $description;  ?></textarea>
                    <span class="error" id="pdf_pathError"></span>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12">
                <button id="signupButton" type="submit" class="btn btn-primary form-control">Update</button>
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
    // Function to handle form submission
    $('#libraryupdate').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Get form data
        var formData = new FormData(this);

        // Show loader
        $('.loader').show();

        // Make AJAX request
        $.ajax({
            url: 'update_library.php', // Replace with the actual URL for updating library data
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
    alert("Record update successfully");
    // Perform any additional actions or UI updates
    window.location.href = 'library.php';
  } else {
    alert("Error adding record: " + response);
  }
}
,
            error: function(xhr, status, error) {
                // Hide loader
                $('.loader').hide();

                // Display error message or perform any other error handling
                console.error('AJAX request failed:', status, error);
            }
        });
    });
});
</script>

