<html lang="en">

<head>
    <title>Tutor Park</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets/images/fevicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
 .title{
            color:white;
            font-size:60px;
            text-align: center;
        }
@media only screen and (max-width: 768px) {
    .title{
            color:white;
            font-size:20px;
            text-align: center;
        }
}
.MuiInputLabel-outlined {
    z-index: 1;
    transform: translate(-2px, -19px) scale(1);
    pointer-events: none;
}
 .error {
            color: red;
        }
        </style>
</head>

<body>

   <div id="root">
  <div class="loginpage min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="mt-3 col-8 title">
          <!-- <a href=""><img class="d-block mx-auto img-fluid mb-3 img-fluid" src="assets/images/TutorPark_logo_white.741693fd.png" hight="120px" width="350px"></a> -->
          AXISCLASS.COM
        </div>
        <div class="col-2"></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card">
              <div class="card-body p-4">
                <form id="schoolForm">
                  <h1 class="text-center">Sign Up</h1>
                  <p class="text-center text-medium-emphasis">Add Your School </p>

                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="schoolname">School Name:</label>
                          <input type="text" class="form-control" id="schoolname" name="schoolname">
                          <span class="error" id="schoolnameError"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="udisenumber">U-Dise Number:</label>
                          <input type="text" class="form-control" id="udisenumber" name="udisenumber">
                          <span class="error" id="udisenumberError"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="registrationnumber">Registration Number:</label>
                          <input type="text" class="form-control" id="registrationnumber" name="registrationnumber">
                          <span class="error" id="registrationnumberError"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="areaname">Area Name:</label>
                          <input type="text" class="form-control" id="areaname" name="areaname">
                          <span class="error" id="areanameError"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="pincode">Pincode:</label>
                          <input type="text" class="form-control" id="pincode" name="pincode">
                          <span class="error" id="pincodeError"></span>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="city">City:</label>
                          <input type="text" class="form-control" id="city" name="city">
                          <span class="error" id="cityError"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" name="email">
                          <span class="error" id="emailError"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="phonenumber">Phone Number:</label>
                          <input type="tel" class="form-control" id="phonenumber" name="phonenumber">
                          <span class="error" id="phonenumberError"></span>
                        </div>
                      </div>
                    </div><BR>
                    <div class="row mt-1">
                      <div class="col-md-12">
                        <button id="schoolButton" type="submit" class="btn btn-primary form-control">Register Your School</button>
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
</div>







<script>
$(document).ready(function() {
    
    
      $('#udisenumber').focusout(function () {
    var udisenumber = $(this).val().trim();
    if (udisenumber !== '') {
        checkUdisenumberExists(udisenumber);
    }
});

$('#registrationnumber').focusout(function () {
    var registrationnumber = $(this).val().trim();
    if (registrationnumber !== '') {
        checkRegistrationNumberExists(registrationnumber);
    }
});
    // Handle form submission
    $('#schoolForm').submit(function(e) {
        e.preventDefault(); // Prevent form from submitting normally
        
        // Clear previous error messages
        $('.error').text('');
        
        // Get form data
        var formData = {
            schoolname: $('#schoolname').val(),
            udisenumber: $('#udisenumber').val(),
            registrationnumber: $('#registrationnumber').val(),
            areaname: $('#areaname').val(),
            pincode: $('#pincode').val(),
            city: $('#city').val(),
            email: $('#email').val(),
            phonenumber: $('#phonenumber').val()
        };
        
      




        
        // Perform client-side validation
        var isValid = true;
        
        if (formData.schoolname === '') {
            isValid = false;
            $('#schoolnameError').text('School name is required.');
        }
        
        if (formData.udisenumber === '') {
            isValid = false;
            $('#udisenumberError').text('U dise number is required.');
        }
        if (formData.registrationnumber === '') {
            isValid = false;
            $('#registrationnumberError').text('registration number is required.');
        }
        if (formData.areaname === '') {
            isValid = false;
            $('#areanameError').text('area name is required.');
        }
        if (formData.pincode === '') {
            isValid = false;
            $('#pincodeError').text('pincode is required.');
        }
        if (formData.city === '') {
            isValid = false;
            $('#cityError').text('city is required.');
        }
        if (formData.email === '') {
            isValid = false;
            $('#emailError').text('email is required.');
        }
        if (formData.phonenumber === '') {
            isValid = false;
            $('#phonenumberError').text('phone number is required.');
        }
        
        
        
        if (isValid) {
            // Submit the form via AJAX
            $.ajax({
                url: './backend/store_school.php', // Replace with the actual URL to your server-side script
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                
                    if (response.success) {
                        // Clear form inputs
                        $('#schoolForm')[0].reset();
                        
                        // Display success message
                          window.location.href = 'school.php';
                    } else {
                        // Display error messages
                        if (response.errors) {
                            $.each(response.errors, function(key, value) {
                                $('#' + key + 'Error').text(value);
                            });
                        } else {
                            alert('An error occurred while registering the school.');
                        }
                    }
                },
                error: function() {
                    console.log('An error occurred while submitting the form.');
                }
            });
        }
    });
});

function checkUdisenumberExists(udisenumber) {
    // Make AJAX request to check if udisenumber exists
    $.ajax({
        url: './backend/check_udisenumber.php', // Replace with the actual URL to your server-side script
        type: 'POST',
        data: { udisenumber: udisenumber },
        dataType: 'json',
        success: function(response) {
            if (response.message === 'UDISE Number exists.') {
                $('#udisenumberError').text('UDISE Number already exists.').css('color', 'red');
                 $('#schoolButton').hide(); // Hide the signup button
            } else {
                $('#udisenumberError').text('');
                 $('#udisenumberError').text('Valid UDISE Number').css('color', 'green');
                $('#schoolButton').show(); // Show the signup button
            }
        },
        error: function() {
            console.log('An error occurred while checking UDISE Number existence.');
        }
    });
}

function checkRegistrationNumberExists(registrationnumber) {
    // Make AJAX request to check if registrationnumber exists
    $.ajax({
        url: './backend/check_registrationnumber.php', // Replace with the actual URL to your server-side script
        type: 'POST',
        data: { registrationnumber: registrationnumber },
        dataType: 'json',
        success: function(response) {
            if (response.message == 'Registration Number exists.') {
                $('#registrationnumberError').text('Registration Number already exists.').css('color', 'red');
                   $('#schoolButton').hide(); // Hide the signup button
            } else {
                $('#registrationnumberError').text('');
                    $('#registrationnumberError').text('Valid UDISE Number').css('color', 'green');
                $('#schoolButton').show(); // Show the signup button
            }
        },
        error: function() {
            console.log('An error occurred while checking Registration Number existence.');
        }
    });
}
</script>
    <!-- <script src="/static/js/bundle.js"></script>
    <script src="/static/js/vendors~main.chunk.js"></script>
    <script src="/static/js/main.chunk.js"></script> -->


</body>

</html>
