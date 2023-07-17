<!-- forgot_password.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tutor Park - Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" href="assets/images/fevicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
                                    <h1>Forgot Password</h1>
                                    <h2><div id="message"></div>
</h2>
        <p>Enter your email address to reset your password.</p>
        <form id="forgotPasswordForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div><BR>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#forgotPasswordForm').submit(function(event) {
        event.preventDefault();

        var email = $('#email').val();

        $.ajax({
            url: './backend/forgot_password_process.php',
            method: 'POST',
            data: {
                email: email
            },
            success: function(response) {
                // Handle success response
                if (response.success) {
                    showMessage('success', 'An email with instructions to reset your password has been sent.');
                    // window.location.href = 'login.php'; // Redirect to login page
                } else {
                    showMessage('error', response.message);
                }
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(error);
            }
        });
    });

    function showMessage(type, message) {
        var messageElement = $('#message');
        messageElement.removeClass('success error');
        messageElement.addClass(type);
        messageElement.text(message);
    }
});

    </script>
</body>

</html>
