<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets/images/fevicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

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

        .success {
            color: green;
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
                        AXISCLASS.COM
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-body p-4">
                                    <h1>Reset Password</h1>
                                    <h2>
                                        <div id="message"></div>
                                    </h2>

                                    <form id="resetPasswordForm">
                                        <div>
                                            <label for="password">New Password:</label>
                                            <input type="password" id="password" name="password" class="form-control" required>
                                        </div>
                                        <div>
                                            <label for="confirm_password">Confirm Password:</label>
                                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                                        </div>
                                        <div>
                                            <br>
                                            <button type="submit" id="resetPasswordBtn" class="form-control btn btn-success">Reset Password</button>
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
            $('#resetPasswordForm').submit(function(event) {
                event.preventDefault();

                var password = $('#password').val();
                var confirmPassword = $('#confirm_password').val();
                var token = getParameterByName('token');

                // Perform password validation
                var errors = [];

                if (password === '') {
                    errors.push('Password is required.');
                }
else if (password.length < 8) {
errors.push('Password must be at least 8 characters long.');
}            if (confirmPassword === '') {
                errors.push('Confirm Password is required.');
            } else if (password !== confirmPassword) {
                errors.push('Passwords do not match.');
            }

            if (errors.length > 0) {
                var errorList = '<ul>';
                $.each(errors, function(index, error) {
                    errorList += '<li>' + error + '</li>';
                });
                errorList += '</ul>';

                showMessage('error', errorList);
            } else {
                $.ajax({
                    url: './backend/reset_password_process.php',
                    method: 'POST',
                    data: {
                        token: token,
                        password: password,
                        confirm_password: confirmPassword
                    },
                    success: function(response) {
                        // Handle success response
                        var data = JSON.parse(response);
                        if (data.success) {
                            showMessage('success', data.message);
                            $('#resetPasswordForm')[0].reset(); // Reset the form
                        } else {
                            showMessage('error', data.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(error);
                        showMessage('error', 'Failed to reset the password. Please try again later.');
                    }
                });
            }
        });

        function showMessage(type, message) {
            var messageElement = $('#message');
            messageElement.removeClass('success error');
            messageElement.addClass(type);
            messageElement.html(message);
        }

        // Function to get URL parameter by name
        function getParameterByName(name) {
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(location.search);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }
    });
</script>
</body>
</html>