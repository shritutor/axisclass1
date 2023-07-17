<?php

// include Function  file
include_once '../backend/function.php';
$axisclass = new DB_con();
$getAllInfoClass = $axisclass->getAllInfo('classes');
$getAllInfoDivision = $axisclass->getAllInfo('divisions');
$schoolid = "";
$getUserInfo = $axisclass->getAllInfoWhere('user', $_SESSION['uid']);
while ($user = mysqli_fetch_array($getUserInfo)) {
    $userfirstname = $user['first_name'];
    $usermiddlename = $user['middle_name'];
    $userlastname = $user['last_name'];
    $usertype = $user['users_type'];
    $schoolid = $user['schools_id'];
    $subjectid = $user['subject_id'];
    $classes_id = $user['classes_id'];
    $divisions_id = $user['divisions_id'];
}

$getSchoolInfo = $axisclass->getAllInfoWhere('schools', $schoolid);

while ($school = mysqli_fetch_array($getSchoolInfo)) {
    $schoolname = $school['schoolname'];
    $udisenumber = $school['udisenumber'];
    $registrationnumber = $school['registrationnumber'];
    $areaname = $school['areaname'];
    $city = $school['city'];
    $email = $school['email'];
    $phonenumber = $school['phonenumber'];
    $imageurl = $school['imageurl'];
}

$userfullname = $userfirstname . " " . $usermiddlename . " " . $userlastname;
$studentrole = "";
if ($usertype == "2") {
    $studentrole = "monitor";
} else if ($usertype == "3") {
    $studentrole = "Class Teacher";
} else if ($usertype == "4") {
    $studentrole = "Subject Teacher";
} else if ($usertype == "5") {
    $studentrole = "Correspondent";
} else {
    $studentrole = "student";
}

$schoolstuffinfoteacher = $axisclass->getAllInfoWherediffId("user", "schools_id", $schoolid);
$schoolstuffinfoteacher3 = $axisclass->getAllInfoWherediffId("user", "schools_id", $schoolid);
$schoolstuffinfostudent = $axisclass->getAllInfoWherediffId("user", "schools_id", $schoolid);

?>

<style>
    .username {
        text-transform: capitalize;
        font-size: 20px;
        font-weight: bold;
        color: #333;
    }
    .img-fluid {
    max-width: 15%;
    height: auto;
}
</style>

<div class="bg-info mt-5 p-5">
  <div class="class_head_top">
    <h5>
      Class:-
      <?php
while ($classinfo = mysqli_fetch_array($getAllInfoClass)) {
    if ($classes_id == $classinfo['id']) {
        echo $classinfo['class'];
    }
}
while ($divisioninfo = mysqli_fetch_array($getAllInfoDivision)) {
    if ($divisions_id == $divisioninfo['id']) {
        echo $divisioninfo['divisions'];
    }
}
?>
    </h5>
    <p>
      <span class="font-weight-bold">
        <?php
while ($schoolstuff3 = mysqli_fetch_array($schoolstuffinfoteacher3)) {
    if ($schoolstuff3['users_type'] == "3") {
        echo "Class Teacher:- </span> " . $schoolstuff3['first_name'] . " " . $schoolstuff3['middle_name'] . " " . $schoolstuff3['last_name'] . " </p>";
    }
}
?>
<?php if ($usertype == "3" || $usertype == "4") {
  ?>
       <button class="btn btn-primary mb-2" onclick="class_teachfn()">View Teachers</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_studentfn()">View Students</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_timetablefn()">View Time Table</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_attendancefn()">View Attendance</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_shaduleameetfn()">Shadule a meet</button>
  <?php
} else { ?>
      <button class="btn btn-primary mb-2" onclick="class_teachfn()">View Teachers</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_studentfn()">View Students</button>
      <button class="btn btn-primary mb-2 ml-2" onclick="class_attendancefn()">View Time Table</button>
      <?php } ?>
    </div>
</div>

<div class="row">
  <div class="d-flex justify-content-center">
    <span class="username">Welcome <?php echo ucfirst(strtolower($userfullname)); ?> (<?php echo $studentrole; ?>)</span>
  </div>
</div>

<div class="row">
  <div class="d-flex justify-content-center">
    <div class="container">
    <div class="container">
  <div class="row">
    <div class="col-md-12 teachers-container">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Teachers 
          <?php if ($usertype == "3") {
  ?>    
                <button>Add New Teacher</button>
  <?php } ?>
        </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="teachers-table">
              <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$sr_no = 1;
while ($schoolstuff = mysqli_fetch_array($schoolstuffinfoteacher)) {
    if ($schoolstuff['users_type'] == "3" || $schoolstuff['users_type'] == "4") {
        ?>
                    <tr>
                      <td><?php echo $sr_no++; ?></td>
                      <td><img src="<?php echo "../myprofile/" . $schoolstuff['profile_image']; ?>" alt="Teacher Profile" class="rounded-circle profile-pic img-fluid"></td>
                      <td><?php echo $schoolstuff['first_name'] . " " . $schoolstuff['middle_name'] . " " . $schoolstuff['last_name']; ?></td>
                      <td>
                        <?php
$getsubject = $axisclass->getAllInfoWhere('subject', $schoolstuff['subject_id']);
        while ($subject = mysqli_fetch_array($getsubject)) {
            echo $subject['name'];
        }?>
                      </td>
                      <td>
                        <!-- Add your desired action button here -->
                      </td>
                    </tr>
                <?php
}
}?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 students-container">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h5 class="card-title">Students

          <?php if ($usertype == "3") {
  ?>    
                <button>Add New Student</button>
  <?php } ?>
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="students-table">
              <thead>
                <tr>
                  <th>Sr. No</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
$sr_no = 1;
while ($schoolstuff2 = mysqli_fetch_array($schoolstuffinfostudent)) {
    if ($schoolstuff2['users_type'] == "2" || $schoolstuff2['users_type'] == "1") {
        ?>
                    <tr>
                      <td><?php echo $sr_no++; ?></td>
                      <td><img src="<?php echo "../myprofile/" . $schoolstuff2['profile_image']; ?>" alt="Student Profile" class="rounded-circle profile-pic img-fluid"></td>
                      <td><?php echo $schoolstuff2['first_name'] . " " . $schoolstuff2['middle_name'] . " " . $schoolstuff2['last_name']; ?></td>
                      <td>
                        <?php if ($schoolstuff2['users_type'] == "2") {?>
                          Monitor
                        <?php }?>
                      </td>
                      <td>
                        <!-- Add your desired action button here -->
                      </td>
                    </tr>
                <?php }?>
                <?php
}?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>



<script>
   $(document).ready(function() {
    $('#teachers-table').DataTable();
    $('#students-table').DataTable();
  });
  </script>
<script>
   $('.teachers-container').hide();
    $('.students-container').hide();
  function class_teachfn() {
    $('.teachers-container').show();
    $('.students-container').hide();
  }

  function class_studentfn() {
    $('.teachers-container').hide();
    $('.students-container').show();
  }
</script>
