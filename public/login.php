<?php require_once("../include/session.php"); ?>
<?php require_once("../include/db_connect.php"); ?>
<?php require_once("../include/functions.php"); ?>

<?
$message = "";

if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($connection, $_POST['username']);
};
if (isset($_POST['submit'])) {
  $password = $_POST['password'];
  if (empty($formerror)) {


    $query = "SELECT * FROM users WHERE (username = '$username') LIMIT 1";
    $finalquery = mysqli_query($connection, $query);
    $result = mysqli_fetch_assoc($finalquery);

    if ($result) {
      $passwordcrypted = password_check($password, $result['password']);
    if ($passwordcrypted) {
      //$message = "inloggen gelukt";
      $_SESSION['username'] = $username;
      $_SESSION['userid'] = $result['id'];
      $_SESSION['ingelogd'] = true;
      header ("location: ". " index.php");
      } else {
        $message .= "iets ging fout";
      };
    } else {
        $message .= "iets ging fout";
      };;
  };
};

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>countr.cc || Sign In</title>

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

<?php
    if (isset($_SESSION['ingelogd'])) {
      header("location". "index.php");
  } else {
  };
?>

<div class="registerpage login">
<!-- ------------------ -->
<?php include('../include/CCnavigation.php'); ?>
<!-- ------------------ -->



<div class="Header-wrap login bg-image-fixed">
    <div class="container">

        <div class="Header-box">
            <div class="Register-content show">
                <p class="strongtitle">Login</p>
<?php if (!empty($message)){ ?> <p> the username and password you entered do not match, please try again. </p><?php }; ?>
                <form action="login.php" method="post">
                    <div class="fields">

                        <div class="Input-item">
                            <input type="text" name="username" <?php if (!empty($username)){echo'value="' . $username;}else{echo 'placeholder="Username';} ?>"><br>
                        </div>



                        <div class="Input-item">
                            <input type="password" name="password" placeholder="password"><br>
                        </div>

                        <div class="button-wrap" id="continue">
                            <input type="submit" name="submit" value="submit">
                        </div>
                    </div><!-- fields -->
                </form>
            </div>
        </div>
    
    </div>
</div>

</body>
</html>

<?php
  // 5. Close database connection
  if (isset($connection)) {
    mysqli_close($connection);
  }
?>
