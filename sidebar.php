<nav id="sidebarMenu" class="bg-light sidebar">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="http://localhost:8080/jeeyartechnology/axisclass.com/home/home.php" aria-current="page">
          Home <span class="notification-container">
            <i id="notificationIcon" class="fas fa-bell"></i>
            <span id="notificationCount" class="badge badge-danger"></span>
          </span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/myprofile/myprofile.php">
          My Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/questionandanswer/questionandanswer.php">
          Question &amp; Answers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8080/jeeyartechnology/axisclass.com/logout.php">
          Logout
        </a>
      </li>
      <li class="nav-item text-center">
        <img src="<?php echo $asseturl; ?>/assets/images/pragdya.jpg" alt="Advertisement" class="img-fluid advertisement-img">
      </li>
    </ul>
  </div>
</nav>

<style>
  .advertisement-img {
    width: 110%; /* Adjust the size as needed */
    height: auto;
    transform: scale(0.9); /* Increase the scale factor for a larger image */
  }
</style>
