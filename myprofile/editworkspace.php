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
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Profile Update</h5>
        </div>
        <div class="card-body">
      <form id="profileupdate">
   
    <p class="text-center text-medium-emphasis">Update for your account</p>

    <div class="col-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profileImage">Profile Image:</label>
                    <input type="file" class="form-control" id="profileImage" name="profileImage">
                    <span class="error" id="profileImageError"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="userid" id="userid">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName"
                        value="<?php echo $userfirstname; ?>">
                    <span class="error" id="firstNameError"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="middleName">Middle Name:</label>
                    <input type="text" class="form-control" id="middleName" name="middleName"
                        value="<?php echo $usermiddlename; ?>">
                    <span class="error" id="middleNameError"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName"
                        value="<?php echo $userlastname; ?>">
                    <span class="error" id="lastNameError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo
                            ($gender==='male' ) ? 'checked' : '' ; ?>>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo
                            ($gender==='female' ) ? 'checked' : '' ; ?>>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other" <?php echo
                            ($gender==='other' ) ? 'checked' : '' ; ?>>
                        <label class="form-check-label" for="other">
                            Other
                        </label>
                    </div>
                    <span class="error" id="genderError"></span>
                </div>
            </div>
        </div>
         <?php if($usertype=='4'){ ?>
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
        <?php } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>"
                        readonly="readonly">
                    <span class="error" id="emailError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                        value="<?php echo $phone; ?>">
                    <span class="error" id="phoneNumberError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="dateOfBirth">Date of Birth:</label>
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                    <span class="error" id="dateOfBirthError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nationality">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                        value="<?php echo $nationality; ?>">
                    <span class="error" id="nationalityError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="adharID">Adhar ID:</label>
                    <input type="text" class="form-control" id="adharID" name="adharID"
                        value="<?php echo $aadharid; ?>">
                    <span class="error" id="adharIDError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="area">Area:</label>
                    <input type="text" class="form-control" id="area" name="area" value="<?php echo $area; ?>">
                    <span class="error" id="areaError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" name="city" value="<?php echo $mpcity; ?>">
                    <span class="error" id="cityError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" name="state" value="<?php echo $state; ?>">
                    <span class="error" id="stateError"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>">
                    <span class="error" id="countryError"></span>
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
    <!-- second for school update -->
    
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">School Update</h5>
        </div>
        <div class="card-body">
   <form id="schoolForm">
  <p class="text-center text-medium-emphasis">Update Your School </p>

  <div class="col-12">
         <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="imageurl">Photo:</label>
          <input type="file" class="form-control" id="imageurl" name="imageurl">
          <span class="error" id="imageurlError"></span>
        </div>
      </div>
    </div>
    <div class="row">
         <input type="hidden" value="<?php echo $schoolid; ?>" name="schoolid" id="schoolid">
      <div class="col-md-4">
        <div class="form-group">
          <label for="schoolname">School Name:</label>
          <input type="text" class="form-control" id="schoolname" name="schoolname" value="<?php echo $schoolname; ?>">
          <span class="error" id="schoolnameError"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="udisenumber">U-Dise Number:</label>
          <input type="text" class="form-control" id="udisenumber" name="udisenumber" value="<?php echo $udisenumber; ?>">
          <span class="error" id="udisenumberError"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="registrationnumber">Registration Number:</label>
          <input type="text" class="form-control" id="registrationnumber" name="registrationnumber" value="<?php echo $registrationnumber; ?>">
          <span class="error" id="registrationnumberError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="areaname">Area Name:</label>
          <input type="text" class="form-control" id="areaname" name="areaname" value="<?php echo $areaname; ?>">
          <span class="error" id="areanameError"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="pincode">Pincode:</label>
          <input type="text" class="form-control" id="pincode" name="pincode" value="<?php echo $spincode; ?>">
          <span class="error" id="pincodeError"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="city">City:</label>
          <input type="text" class="form-control" id="city" name="city" value="<?php echo $scity; ?>">
          <span class="error" id="cityError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $semail; ?>">
          <span class="error" id="emailError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="phonenumber">Phone Number:</label>
          <input type="tel" class="form-control" id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>">
          <span class="error" id="phonenumberError"></span>
        </div>
      </div>
    </div>
 
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="principal">Principal:</label>
          <input type="text" class="form-control" id="principal" name="principal" value="<?php echo $Principal; ?>">
          <span class="error" id="principalError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="viceprincipal">Vice Principal:</label>
          <input type="text" class="form-control" id="viceprincipal" name="viceprincipal" value="<?php echo $VicePrincipal; ?>">
          <span class="error" id="viceprincipalError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="incharge">Incharge:</label>
          <input type="text" class="form-control" id="incharge" name="incharge" value="<?php echo $Incharge; ?>">
          <span class="error" id="inchargeError"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="workingyearstartdate">Working Year Start Date:</label>
          <input type="date" class="form-control" id="workingyearstartdate" name="workingyearstartdate" value="<?php echo $WorkingYearstartDate; ?>">
          <span class="error" id="workingyearstartdateError"></span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="workingyearenddate">Working Year End Date:</label>
          <input type="date" class="form-control" id="workingyearenddate" name="workingyearenddate" value="<?php echo $WorkingYearEndDate; ?>">
          <span class="error" id="workingyearenddateError"></span>
        </div>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12">
        <button id="schoolButton" type="submit" class="btn btn-primary form-control">Update</button>
      </div>
    </div>
  </div>
</form>

        </div>
      </div>
    </div>
    
    <!-- end of school part -->
    
    
  </div>
  
</div>






    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('#profileupdate').submit(function(event) {
      event.preventDefault(); // Prevent form submission

      // Get form data
      var formData = new FormData(this);

      // Add the profile image file to form data
      var profileImage = $('#profileImage')[0].files[0];
      formData.append('profileImage', profileImage);

      // Make Ajax request
      $.ajax({
        url: 'updateprofile.php', // Replace with the actual URL to handle the form submission
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          // Handle success response here
            if (response === '1') {
            alert("Profile updated successfully.");
          // Perform any additional actions or UI updates
           window.location.href = 'myprofile.php';
            } else {
              alert("Error updating profile: " + response);
            }
        },
        error: function(xhr, status, error) {
          // Handle error response here
          console.log(xhr.responseText);
          // You can show an error message or perform any other error handling actions
        }
      });
    });
    
    
    $(document).ready(function() {
  $('#schoolForm').submit(function(event) {
    event.preventDefault(); // Prevent form submission

    // Create a FormData object
    var formData = new FormData();

    // Add form fields to the FormData object
    formData.append('schoolname', $('#schoolname').val());
    formData.append('schoolid', $('#schoolid').val());
    formData.append('udisenumber', $('#udisenumber').val());
    formData.append('registrationnumber', $('#registrationnumber').val());
    formData.append('areaname', $('#areaname').val());
    formData.append('pincode', $('#pincode').val());
    formData.append('city', $('#city').val());
    formData.append('email', $('#email').val());
    formData.append('phonenumber', $('#phonenumber').val());
    formData.append('principal', $('#principal').val());
    formData.append('viceprincipal', $('#viceprincipal').val());
    formData.append('incharge', $('#incharge').val());
    formData.append('workingyearstartdate', $('#workingyearstartdate').val());
    formData.append('workingyearenddate', $('#workingyearenddate').val());

    // Add the photo file to the FormData object
    var photo = $('#imageurl')[0].files[0];
    formData.append('photo', photo);

    // Make Ajax request
    $.ajax({
      url: 'updateschool.php', // Replace with the actual URL to handle the form submission
      type: 'POST',
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        // Handle success response here
        if (response === '1') {
          alert("School updated successfully.");
          // Perform any additional actions or UI updates
          window.location.href = 'myprofile.php';
        } else {
          alert("Error updating school: " + response);
        }
      },
      error: function(xhr, status, error) {
        // Handle error response here
        console.log(xhr.responseText);
        // You can show an error message or perform any other error handling actions
      }
    });
  });
});

  });
</script>