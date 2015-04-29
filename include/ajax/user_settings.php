
<?php

//do query to get email adress from database.
$username = $_SESSION['username'];

    $usersettings_db_query = "SELECT * FROM users WHERE (username = '$username') LIMIT 1";
    $usersettings_query = mysqli_query($connection, $usersettings_db_query);
    $result = mysqli_fetch_assoc($usersettings_query);

if (isset($_POST['username'])){
	$username = 	htmlspecialchars($_POST['username']);
}
if (isset($_POST['password'])){
	$password = 	htmlspecialchars($_POST['password']);
}
if (isset($_POST['password_current'])){
	$password_current = 	htmlspecialchars($_POST['password_current']);
}
if (isset($_POST['email'])){
	$email = 	htmlspecialchars($_POST['email']);
}


?>

<div class="UserClose-button">
				<p>Close Profile</p>
				<img src="img/dark_kruisje-2.svg">
			</div>

			<div class="Content">
				<div class="Title"><h2>Settings</h2></div>
				
				<div class="Input-item">
					<p>Change user name</p>
					<input class="check form-name" type="text" placeholder="<?php echo $result['username']; ?>" required>
				</div>

				<div class="Input-item">
					<p>Change email adress</p>
					<input class="check form-email" type="email" placeholder="<?php echo $result['email']; ?>" required>
				</div>

				<div class="Input-item">
					<p>Change password</p>
					<input type="password" class="check pass form-pass_current" placeholder="Current password" required>
					<input type="password" class="check pass form-pass" placeholder="New password">
				</div>
			</div>

			<div class="UserSettings-button update">
				<p>Update</p>
			</div>