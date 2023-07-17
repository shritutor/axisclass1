<?php 
session_start();
// include Function  file
    include_once('./backend/function.php');
    $axisclass = new DB_con();
    $getAllInfoClass = $axisclass->getAllInfo('classes');
    $getAllInfoDivision = $axisclass->getAllInfo('divisions');
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
    <form id="myForm" method="POST" action="update_database.php">
        <input type="hidden" value="<?php echo $_SESSION['schoolid']; ?>" name="schoolid" id="schoolid">
        <input type="hidden" value="<?php echo $_SESSION['uid']; ?>" name="userid" id="userid">
      <div>
        <label for="role">Your Role In School:</label>
        <select id="role" name="role" class="form-control">
            <option value="">Select Role</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Correspondent">Correspondent</option>
        </select>
        <span id="roleError" class="error"></span>
    </div>
    <div id="teacherOptions" style="display: none;">
        <label for="teacherType">Teacher Type:</label>
        <select id="teacherType" name="teacherType" class="form-control">
            <option value="">Select Teacher Type</option>
            <option value="Class Teacher">Class Teacher</option>
            <option value="Subject Teacher">Subject Teacher</option>
        </select>
        <span id="teacherTypeError" class="error"></span>
    </div>
        <div>
            <label for="class">Select Your Class:</label>
            <select id="class" name="class" class="form-control">
                <option value="">Select Class</option>
                <!-- Options dynamically populated from database -->
                <!-- Replace this section with your code to fetch classes from the database -->
                 <?php while ($class = mysqli_fetch_array($getAllInfoClass)) { ?>
                                    <option value="<?php echo $class['id']; ?>"><?php echo $class['class']; ?>
                                    </option>
                                <?php } ?>
            </select>
            <span id="classError" class="error"></span>
        </div>
        <div>
            <label for="division">Select Your Division:</label>
            <select id="division" name="division" class="form-control">
                <option value="">Select Division</option>
                <!-- Options dynamically populated from database -->
                <!-- Replace this section with your code to fetch divisions from the database -->
              <?php
                while($division = mysqli_fetch_array($getAllInfoDivision)){
                    ?>
                    <option value="<?php echo $division['id']; ?>"><?php echo $division['divisions']; ?></option>
                    <?php
                }
              ?>
            </select>
            <span id="divisionError" class="error"></span>
        </div><BR>
        <div>
            <input type="submit" value="Submit" class="form-control">
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
            
            
             $('#role').change(function() {
            var selectedRole = $(this).val();
            
                // Hide or show dropdowns based on selected role
                if (selectedRole === 'Correspondent') {
                  $('#teacherOptions, #class, #division').hide();
                } else {
                  $('#teacherOptions, #class, #division').show();
                }
                if (selectedRole === 'Teacher') {
                    $('#teacherOptions').show();
                } else {
                    $('#teacherOptions').hide();
                }
        });


            $('#myForm').submit(function(e) {
                e.preventDefault(); // Prevent form submission

                // Perform field validation
                var role = $('#role').val();
                var selectedClass = $('#class').val();
                var division = $('#division').val();
                var teacherType = $('#teacherType').val();
                var schoolid = $('#schoolid').val();
                var userid = $('#userid').val();
                var isValid = true;

                // Validate Role
                if (role === '') {
                    $('#roleError').text('Please select your role');
                    isValid = false;
                } else {
                    $('#roleError').text('');
                }
if(role !="Correspondent"){
                // Validate Class
                if (selectedClass === '') {
                    $('#classError').text('Please select your class');
                    isValid = false;
                } else {
                    $('#classError').text('');
                }

                // Validate Division
                if (division === '') {
                    $('#divisionError').text('Please select your division');
                    isValid = false;
                } else {
                    $('#divisionError').text('');
                }
}
                  // Validate teacherOptions fields if visible
        if ($('#teacherOptions').is(':visible')) {
            if (teacherType === '') {
                $('#teacherTypeError').text('Please select the teacher type');
                event.preventDefault();
            }
        }

                // If all fields are valid, submit the form
                if (isValid) {
                   
                    $.post('./backend/update_schooldetails.php', {
                        role: role,
                        selectedClass: selectedClass,
                        division: division,
                        schoolid: schoolid,
                        teacherType : teacherType,
                        userid : userid
                    }, function(response) {
                        // Handle the response from the server
                        if (response.success) {
                            // School details updated successfully
                            console.log('Response:', response.message);
                            // Display a success message to the user
                            alert('School details updated successfully');
                             window.location.href = 'home/home.php'; // Replace with your desired page URL
                        } else {
                            // Error updating school details
                            console.log('Response:', response.message);
                            // Display an error message to the user
                            alert('Error updating school details');
                        }
                    });

                    // For this example, we'll just log the data
                    console.log('Role:', role);
                    console.log('Class:', selectedClass);
                    console.log('Division:', division);
                    console.log('School Id:', schoolid);
                    console.log('User Id:', userid);

                    // Reset the form
                    $('#myForm')[0].reset();
                }
            });
        });
    </script>
</body>

</html>
