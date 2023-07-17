<?php
// Start the session
session_start();

// Check if the session variable exists
if (!isset($_SESSION['uid'])) {
    // Redirect to the desired page
    header("Location: ../index.php");
    exit();
}
?>
<?php include("cheader.php"); ?>
<?php include("../topbar.php"); ?>
<style>
    /* Adjust the style of the notification count badge as per your preference */

</style>
  <!-- Sidebar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-2 d-md-block">
        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle sidebar menu">
          <span class="navbar-toggler-icon"></span>
        </button>
       <?php include("../sidebar.php"); ?>
      </div>
      <div class="col-md-9 col-lg-10">
          
          <?php include("workspace.php"); ?>
          
       </div> 
      </div>
    </div>
  </div>

<?php include("cfooter.php"); ?>
