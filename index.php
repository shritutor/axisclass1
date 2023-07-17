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
                                    <form id="loginForm">
                                        <h1 class="text-center">Login</h1>
                                        <p class="text-center text-medium-emphasis">Sign In to your account</p>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <label for="email">Email / Phone</label><BR><BR>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Enter your email or phone">
                                                    <span class="error" id="emailError"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <label for="password">Password</label><BR><BR>
                                                <input type="password" class="form-control" id="password"
                                                    name="password" placeholder="Enter your password">
                                                     <span class="error" id="passwordError"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 text-end">
                                            <a href="forgot_password.php" style="text-decoration: none;">Forgot
                                                Password</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary mt-3 signup-color font-weight-bold active"
                                                        type="submit">LOGIN</button>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <a class="textDecorationNone" href="signup.php">
<span class="btn btn-primary col-12 mt-3 signup-color font-weight-bold active"
                                                     type="button">SIGN UP</span>
</a>
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
        $('#loginForm').submit(function (event) {
            event.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();

            $.ajax({
                url: './backend/indexlogin.php',
                method: 'POST',
                data: {
                    email: email,
                    password: password
                },
                success: function (response) {
                      if (response.success) {
                                        // Validation passed, do something (e.g., redirect to another page)
                                        window.location.href = 'redirect.php';
                                    } else {
                                        // Validation failed, display error messages
                                        $.each(response.errors, function (key, value) {
                                            $('#' + key + 'Error').text(value);
                                        });
                                    }
                    // window.location.href = "./redirectpage.php";
                },
                error: function (xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
</script>

</body>
</html>