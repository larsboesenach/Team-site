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

<div class="registerpage">
<!-- ------------------ -->
<?php include('../include/CCnavigation.php'); ?>
<!-- ------------------ -->



<div class="Header-wrap bg-image-fixed">
	<div class="container">
	
		<div class="Header-box">
			<div class="Register-content show">
				<p class="strongtitle">Register</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo</p>

				<div class="fields">
					<div class="Input-item">
						<input class="check register-form" placeholder="Your username">
					</div>

					<div class="Input-item">
						<input class="check register-form" placeholder="Your email">
					</div>

					<div class="Input-item">
						<input type="password" class="check pass register-form" placeholder="A password">
					</div>
				</div>
				
				<div class="button-wrap" id="continue">
					<p>continue</p>
					<ul class="dots">
						<li class="dot1 on"></li>
						<li class="dot2"></li>
						<li class="dot3"></li>
					</ul>
				</div>
			</div>

			<div class="Setgoal-content hidden">
				<p class="strongtitle">Set your goal</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo</p>

				<div class="fields">
					<div class="Input-item">
						<input class="check register-form" placeholder="Your height in meters">
					</div>

					<div class="Input-item">
						<input class="check register-form" placeholder="Your weight in kilos">
					</div>
				</div>
				
				<div class="button-wrap" id="finish">
					<p>finish!</p>
					<ul class="dots">
						<li class="dot1 on"></li>
						<li class="dot2 on"></li>
						<li class="dot3"></li>
					</ul>
				</div>
			</div>

			<div class="done-content hidden">
				<p class="strongtitle">All done registering!</p>
				<p>You can now go to the app and login with your login details you've just entered.
				So what are you waiting for lets start counting! :D</p>

				
				
				<div class="button-wrap">
					<p>Go to app</p>
					<ul class="dots">
						<li class="dot1 on"></li>
						<li class="dot2 on"></li>
						<li class="dot3 on"></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</div><!-- Header-wrap -->

</div>