<?php
session_start();
?>
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
                                    <div class="container">
                                        <h1>Enter OTP which we sent to your register email</h1>
                                        <div id="otpError" class="error"></div>
                                        <form id="otpForm">
                                        <div class="mb-3">
                                                <label for="email" class="form-label">Your Email:</label>
                                                <input type="text" id="email" name="email" class="form-control" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];}else{ echo "";}; ?>" readonly="readonly">
                                            </div>
                                            <div class="mb-3">
                                                <label for="otp" class="form-label">OTP:</label>
                                                <input type="text" id="otp" name="otp" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" id="verifyButton" class="btn btn-primary">Verify</button>
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
    </div>

    <script>
       $(document).ready(function () {
    // Handle OTP verification
    $('#verifyButton').click(function () {
        var otp = $('#otp').val().trim();
        var email = $('#email').val().trim();

        // Clear any previous error messages
        $('#otpError').empty();

        // Validate OTP field
        if (otp === '') {
            $('#otpError').text('Please enter the OTP');
            return;
        }

        // Verify the OTP using Ajax
        $.ajax({
            url: 'backend/verify_otp.php', // Replace with the actual URL to your server-side script
            type: 'POST',
            data: { otp: otp, email: email },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // OTP verification successful, do something (e.g., redirect to another page)
                    window.location.href = 'index.php';
                } else {
                    // OTP verification failed, display error message
                    $('#otpError').text(response.message);
                }
            },
            error: function () {
                alert('An error occurred during OTP verification.');
            }
        });
    });
});

    </script>
</body>

</html>
