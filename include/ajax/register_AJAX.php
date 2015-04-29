<?php require_once("../db_connect.php"); ?>
<?php require_once("../functions.php"); ?>
<?php require_once("../session.php"); ?>

<?php

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$email = htmlspecialchars($_POST['email']);
$message = "";
//passwordcheck
	if (!empty($password)){
		$passwordfeedback = checkvariation($password);
		$message .= $passwordfeedback;
		$passwordcrypted = encrypt_password($password);
	}else {
		$passwordfeedback = "Geen wachtwoord ingevoerd.<br>";
		$message .= $passwordfeedback;
	};
//emailcheck
	if (!empty($email)){
		$emailfeedback = emailcheck($email);
		$message .= $emailfeedback;
		}else {
		$emailfeedback = "Geen email ingevoerd.<br>";
		$message .= $emailfeedback;
	};
//namecheck
	if (!empty($username)){
		$namefeedback = namecheck($username);
		$message .= $namefeedback;
		}else {
		$namefeedback = "Geen gebruikersnaam ingevoerd.<br>";
		$message .= $namefeedback;
	};

//als er geen errors zijn insert in database
	if (empty($message)){
		$query = "INSERT INTO users (";
		$query .= " username, password, email";
		$query .= ") VALUES (";
		$query .= "'{$username}', '{$passwordcrypted}', '{$email}'";
		$query .= ")";
		$result = mysqli_query($connection, $query);
//als dit gelukt is, lees de de info uit de database, en log de user in.
		if ($result) {
			  $sessionquery = "SELECT * FROM users WHERE (username = '$username') LIMIT 1";
    		$sessionqueryresult = mysqli_query($connection, $sessionquery);
    		$inlogsession = mysqli_fetch_assoc($sessionqueryresult);
      		$_SESSION['username'] = $username;
      		$_SESSION['userid'] = $inlogsession['id'];
      		$_SESSION['ingelogd'] = true;
      		//forward to app by jQuery
?>
<script> window.location.replace("../public/index.php");
</script>
<?php
			};
	}else{
?>
			<div class="Register-content show">
				<p class="strongtitle">Register</p>
				<p>Choose an username, and a safe password, your password should be at least 8 characters and has to contain a variation of numbers and letters.</p>

				<div class="fields">
					<div class="Input-item <?php if (!empty($namefeedback)){echo 'invalid';} ?>">
						<input class="check register-form form-name" <?php if (!empty($username)){ echo 'value="' . $username;}else {echo 'placeholder="Your username';} ?>">
						<img src="img/red_kruisje-2.svg">
					</div>

					<div class="Input-item <?php if (!empty($emailfeedback)){echo 'invalid';} ?>">
						<input class="check register-form form-email" <?php if (!empty($email)){echo'value="' . $email;}else{echo 'placeholder="Your email';} ?>">
						<img src="img/red_kruisje-2.svg">
					</div>

					<div class="Input-item <?php if (!empty($passwordfeedback)){echo 'invalid';} ?>">
						<input type="password" class="check pass register-form form-pass" placeholder="A password">
						<img src="img/red_kruisje-2.svg">
					</div>
				</div>
				
				<div class="button-wrap" id="continue">
					<p class="register-submit-1">continue</p>
<!-- 					<ul class="dots">
						<li class="dot1 on"></li>
						<li class="dot2"></li>
						<li class="dot3"></li>
					</ul> -->
				</div>
			</div>


<?php 
};
?>