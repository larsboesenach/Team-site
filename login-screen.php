
<?php include('header.php'); ?>
<!-- ---------------------- -->
<!-- The head closes here on this page -->


<!-- ------------------ -->
</head>
<body>

<!-- temporary navigation button -->
<a class="button" href="index.php">Go back</a>

<div class="page-wrap">	
<div class="LoginScreenPage">



<div class="container">

	<div class="Login-box">
		<div class="logo-wrap">
			<img src="img/Team-logo-temp.jpg">
		</div>

		<div class="input-fields">
			<input type="text" name="username" placeholder="username" value="<? echo $username; ?>">
			<input type="text" name="password" placeholder="password" value="<? echo $password; ?>">
		</div>

		<div class="signIn-button">
			<a href="#">Sign In</a>
		</div>

		<div class="forgotPassword">
			<a href="#">forgot password</a>
		</div>
	</div>

</div><!-- container -->



</div><!-- Login screen page -->
<!-- ---------------------- -->
<?php include('footer.php'); ?>