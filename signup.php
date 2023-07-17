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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--<script src="https://www.google.com/recaptcha/api.js?render=6Lc__wsmAAAAANk5s5Oekq9a3x6dz5RcwbcFrFpn" async defer></script>-->

    <style>
        .title {
            color: white;
            font-size: 60px;
            text-align: center;
        }

        @media only screen and (max-width: 768px) {
            .title {
                color: white;
                font-size: 20px;
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
    <!-- Add this HTML element to display the loader image -->
<div id="loader" style="display: none;">
  <img src="assets/images/loader.gif" alt="Loading..." />
</div>
    <div id="root">
        <div class="loginpage min-vh-100 d-flex flex-row align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-2">

                    </div>
                    <div class="mt-3 col-8 title">
                        <!-- <a href=""><img class="d-block mx-auto img-fluid mb-3 img-fluid"
                                src="assets/images/TutorPark_logo_white.741693fd.png" hight="120px" width="350px"></a> -->
                        AXISCLASS.COM
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body p-4">
                                    <form id="sinupForm">
                                        <h1 class="text-center">Sign Up</h1>
                                        <p class="text-center text-medium-emphasis">Sign Up for your account</p>

                                        <div class="col-12">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstName">First Name:</label>
                                                        <input type="text" class="form-control" id="firstName"
                                                            name="firstName">
                                                        <span class="error" id="firstNameError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="middleName">Middle Name:</label>
                                                        <input type="text" class="form-control" id="middleName"
                                                            name="middleName">
                                                        <span class="error" id="middleNameError"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastName">Last Name:</label>
                                                        <input type="text" class="form-control" id="lastName"
                                                            name="lastName">
                                                        <span class="error" id="lastNameError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="gender">Gender:</label>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="male" value="male">
                                                            <label class="form-check-label" for="male">
                                                                Male
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="female" value="female">
                                                            <label class="form-check-label" for="female">
                                                                Female
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                id="other" value="other">
                                                            <label class="form-check-label" for="other">
                                                                Other
                                                            </label>
                                                        </div>
                                                        <span class="error" id="genderError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email">
                                                        <span class="error" id="emailError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="phoneNumber">Phone Number:</label>
                                                        <input type="tel" class="form-control" id="phoneNumber"
                                                            name="phoneNumber">
                                                        <span class="error" id="phoneNumberError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="password">Password:</label>
                                                        <input type="password" class="form-control" id="password"
                                                            name="password">
                                                        <span class="error" id="passwordError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="confirmPassword">Confirm Password:</label>
                                                        <input type="password" class="form-control" id="confirmPassword"
                                                            name="confirmPassword">
                                                        <span class="error" id="confirmPasswordError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6Lc__wsmAAAAANk5s5Oekq9a3x6dz5RcwbcFrFpn">
                                                        </div>

                                                        <span class="error" id="captchaError"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <div class="col-md-12">
                                                    <button id="signupButton" type="submit" class="btn btn-primary form-control">Sign
                                                        Up</button>
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
        $(document).ready(function () {

            // Field validation on keyup event
            $('#firstName,#middleName, #lastName,#email,#phoneNumber,#password,#confirmPassword').keyup(function () {
                validateField($(this));
            });

            // Email existence check on keyup event
            $('#email').focusout(function () {
                var email = $(this).val().trim();
                if (email !== '') {
                    checkEmailExists(email);
                }
            });
            
            
              // Email existence check on keyup event
    $('#phoneNumber').focusout(function () {
    var phoneNumber = $(this).val().trim();
    var email = $('#email').val().trim();

    if (email === '') {
        $('#emailError').text('Email is required.'); // Display error message in the emailError element
        return;
    }

    if (phoneNumber !== '') {
        checkPhoneNumberExists(phoneNumber, email);
    }
});

            
            // Mobile number validation on keyup event
    $('#phoneNumber').keyup(function () {
        validateMobileNumber($(this));
    });

            // Function to check if email exists
            function checkEmailExists(email) {
                $.ajax({
                    url: 'backend/check_email_existance.php', // Replace with the actual URL to your server-side script
                    type: 'POST',
                    data: { email: email },
                    dataType: 'json',
                    success: function (response) {
            if (response.message === 'Email exists.') {
                $('#emailError').text('Email ID already exists').css('color', 'red');
                $('#signupButton').hide(); // Hide the signup button
            } else {
                // If email doesn't exist, proceed with form submission
                $('#emailError').text('Valid Email ID').css('color', 'green');
                  $('#signupButton').show(); // Show the signup button
            }
        },
        error: function () {
            console.log('An error occurred while checking email existence.');
        }
                });
            }


// Mobile number validation function
    function validateMobileNumber(field) {
        var mobileNumber = field.val().trim();
        var mobileNumberPattern = /^[0-9]{10}$/; // Assuming 10-digit mobile number

        if (!mobileNumberPattern.test(mobileNumber)) {
            // Invalid mobile number
            $('#phoneNumberError').text('Invalid mobile number');
        } else {
            // Valid mobile number
            $('#phoneNumberError').empty();
        }
    }
    
    
    // Function to check if phone number exists
    function checkPhoneNumberExists(phoneNumber, email) {
       
    $.ajax({
        url: 'backend/check_phone_number_existance.php', // Replace with the actual URL to your server-side script
        type: 'POST',
        data: { phoneNumber: phoneNumber, email: email },
        dataType: 'json',
        success: function (response) {
            if (response.success === false) {
        $('#phoneNumberError').text('Phone number already exists').css('color', 'red');
        $('#signupButton').hide(); // Hide the signup button
    } else {
        // If phone number doesn't exist, proceed with form submission
        $('#phoneNumberError').text('Valid Phone Number').css('color', 'green');
        $('#signupButton').show(); // Show the signup button
    }
        },
        error: function () {
            console.log('An error occurred while checking phone number existence.');
        }
    });
}
            // Handle form submission
            $('#sinupForm').submit(function (e) {
                //  alert("i am working");
                e.preventDefault(); // Prevent the form from submitting
                
                  // Disable the submit button
        $('#signupButton').prop('disabled', true);
                
                // Show the loader image
    $('#loader').show();

                // Clear any previous error messages
                $('.error').empty();

                // Validate all fields before submitting
                var isValid = true;
                $('input').each(function () {
                    if (!validateField($(this))) {
                        isValid = false;
                    }
                });

                if (isValid) {
                 

                            // Send AJAX request to validate.php
                            $.ajax({
                                url: './backend/signup.php',
                                type: 'POST',
                                data: $('#sinupForm').serialize(),
                                dataType: 'json',
                                success: function (response) {
                                    if (response.success) {
                                        // Validation passed, do something (e.g., redirect to another page)
                                        window.location.href = 'emailverification.php';
                                    } else {
                                        // Validation failed, display error messages
                                        $.each(response.errors, function (key, value) {
                                            $('#' + key + 'Error').text(value);
                                        });
                                    }
                                },
                                error: function () {
                                    alert('An error occurred during validation.');
                                },
                                 complete: function() {
                                  // Hide the loader image when the AJAX request is complete
                                  $('#loader').hide();
                                }
                            });
                    //     });
                    // });
                }else {
                  // Hide the loader image when the form is invalid
                  $('#loader').hide();
                }
            });

            // Field validation function
            function validateField(field) {
                var fieldValue = field.val().trim();
                var fieldName = field.attr('name');
                var errorElement = $('#' + fieldName + 'Error');

                // Check if the field value is empty
                if (fieldValue === '') {
                    errorElement.text('This Field is required');
                    return false;
                }
 
                // Additional validation logic for each field
                if (fieldName === 'password') {
                    // Check password strength
                    if (fieldValue.length < 8) {
                        errorElement.text('Password must be at least 8 characters long');
                        return false;
                    }
                }

                if (fieldName === 'confirmPassword') {
                    // Check if confirm password mat    ches the password
                    var passwordValue = $('#password').val().trim();
                    if (fieldValue !== passwordValue) {
                        errorElement.text('Passwords do not match');
                        return false;
                    }
                }

                // Clear the error message if validation passed
                errorElement.empty();
                return true;
            }
        });
    </script>
</body>

</html>