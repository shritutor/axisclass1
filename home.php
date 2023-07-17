<?php session_start(); ?>
<?php include("cheader.php"); ?>
<?php include("../topbar.php"); ?>
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
          
          
          
       </div> 
      </div>
    </div>
  </div>

<?php include("cfooter.php"); ?>
