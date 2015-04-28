<?php require_once("../include/session.php"); ?>
<?php require_once("../include/db_connect.php"); ?>
<?php require_once("../include/functions.php"); ?>
<?php loggedin_check(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>countr.cc || <?php echo $_SESSION['username'] ?></title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script rel="text/javascript" src="js/custom-js.js"></script>
  <script type="text/javascript" src="js/ajax.js"></script>

  <!-- Bootstrap  -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <!-- -------------- --> 

  <!-- Stylesheet -->
  <link rel="stylesheet" href="css/main.css" />

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,400italic' rel='stylesheet' type='text/css'> 

</head>

<body>
<div class="page-wrap">
  <div class="Homepage">

    <div class="Sidebar-wrap">
    <div class="Circle-wrap">
      <div id="counter-sidebar" class="box1">
        <?php include("../include/main/counter.php"); ?>
      </div>
    <div class="Sidebar-goal-wrap">
      <p class="Sidebar-goal">Update goal</p>
    </div>
  </div>
      <div class="box2">

          <?php include("../include/main/sidebar.php"); ?>

      </div>
    </div><!-- sidebar-wrap -->

    <div class="SidebarFix">
      <div class="Content-wrap">
        <?php include('../include/usersettings.php'); ?>

        <div class="Top-bar">
            <div class="Topbar-Logo">
              <a href="#">
                <img src="img/cc_full-logo.svg">
              </a>
            </div>       

          <div class="Topbar-User">
            <div class="UserWrap">
              <p><?php echo $_SESSION['username']; ?></p>
              <div class="User-img" style="background-image: url('img/pikachu-userprofile.png')"></div>
            </div>
          </div>
        </div> <!-- top-bar -->

        <div id="log" class="Content-entry">
        <?php include("../include/main/log_read.php"); ?>
        </div> <!-- content-entry -->

      </div> <!-- content-wrap -->
    </div> <!-- sidebarfix -->
  </div><!-- Homepage -->
</div><!-- Page-wrap -->


</body>
</html>

<?php
  // 5. Close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>