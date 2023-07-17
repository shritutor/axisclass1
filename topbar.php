<!-- Topbar -->
<?php //$asseturl = "http://localhost:8080/jeeyartechnology/axisclass.com"; ?>
<?php $asseturl = "http://localhost:8080/jeeyartechnology/axisclass.com";?>
<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include_once 'backend/function.php';
$axisclass = new DB_con();

$getUserInfotopbar = $axisclass->getAllInfoWhere('user', $_SESSION['uid']);
while ($usertopbar = mysqli_fetch_array($getUserInfotopbar)) {
    $schoolidtopbar = $usertopbar['schools_id'];
}

$getSchoolInfotopbar = $axisclass->getAllInfoWhere('schools', $schoolidtopbar);

while ($schooltopbar = mysqli_fetch_array($getSchoolInfotopbar)) {
    $schoolnametopbar = $schooltopbar['schoolname'];
    $imageurltopbar = $schooltopbar['imageurl'];

}

?>
<style>
    .school-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .school-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    .school-name {
        font-size: 20px;
        margin-top: 10px;
    }
</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle sidebar menu">
          <span class="navbar-toggler-icon"></span>
        </button>
    <!-- Assuming the school section has the class "school-section" -->
<div class="school-section">
    <?php if ($imageurltopbar): ?>
        <img src="<?php echo $asseturl . "/myprofile/" . $imageurltopbar; ?>" alt="School Image" class="school-image">
    <?php endif;?>
    <div class="school-name">
        <?php echo $schoolnametopbar; ?>
    </div>
</div>
</div>
</h4>



      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topMenu"
        aria-controls="topMenu" aria-expanded="false" aria-label="Toggle top menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topMenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/sessions/sessions.php">
              <div class="card card-css">
                <div class="card-body text-center custom-headercard-body">
                  <img class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/Session.8d118683.png">
                  <p class="card-text card-Name">Sessions</p>
                </div>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/timeline/timeline.php">
              <div class="card card-css">
                <div class="card-body text-center custom-headercard-body">
                  <img class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/timeline.1ae39d49.png">
                  <p class="card-text card-Name">Timeline</p>
                </div>
              </div>
            </a>
          </li>
           <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/event/event.php">
              <div class="card card-css">
                <div class="card-body text-center custom-headercard-body">
                 <img class="card-img card-Image"
                                            src="<?php echo $asseturl; ?>/assets/images/Upcoming_Events.6095c3bc.png">
                  <p class="card-text card-Name">Events</p>
                </div>
              </div>
            </a>
          </li>

           <li class="nav-item">
          <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/library/library.php">
              <div class="card card-css">
                <div class="card-body text-center custom-headercard-body">
                 <img  class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/Library.d5622bcb.png">
                  <p class="card-text card-Name">Library</p>
                </div>
              </div>
            </a>
          </li>
          <!-- Add the remaining code for other top menu items -->
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/chat/chat.php">
                <div class="card card-css">
                  <div class="card-body text-center custom-headercard-body">
                    <img
                    class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/chat.5dca9293.png">
                    <p class="card-text card-Name">Chat</p>
                  </div>
                </div>
              </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/school-diary/school-diary.php">
                    <div class="card card-css">
                      <div class="card-body text-center custom-headercard-body">
                        <img
                                            class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/Library.0a5b31c0.png">
                        <p class="card-text card-Name">SchoolDiary</p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/class-room/class-room.php">
                        <div class="card card-css">
                          <div class="card-body text-center custom-headercard-body">
                            <img
                                            class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/classroom.png">
                            <p class="card-text card-Name">classroom</p>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/home/home.php">
                            <div class="card card-css">
                              <div class="card-body text-center custom-headercard-body">
                                <img
                                            class="card-img card-Image" src="<?php echo $asseturl; ?>/assets/images/myschool.png">
                                <p class="card-text card-Name">MySchool</p>
                              </div>
                            </div>
                          </a>
                        </li>

        </ul>
      </div>
    </div>
  </nav>