<div class="UserSettings">
	<div class="Settings-bg">
		
		<div class="UserSidebar-wrap">
			<div class="UserSidebar-logo">
				<img src="img/CC_white.svg">
				<p>Calorie Countr</p>
			</div>

			
			<div class="UserSidebar-button goal">
				<p>Goal</p>
			</div>

			<div class="UserSidebar-button settings">
				<p>Settings</p>
			</div>

			<div class="UserLogout-wrap">
				<a href="logout.php"> <div class="UserSidebar-button logout">
					<p>Logout</p>
				</div>
				</a>
			</div>

		</div>
		
		<div class="User-content settings">
		<?php include("ajax/user_settings.php"); ?>
		</div>


		<div class="User-content goal">
			<div class="UserClose-button">
				<p>Close Profile</p>
				<img src="img/dark_kruisje-2.svg">
			</div>

			<div class="Content">
				<div class="Title"><h2>Goal</h2></div>
				
				<div class="Input-item">
					<p>Please select gender</p>
			
					<div class="radio">
						<input id="male" type="radio" name="gender" value="male">
						<label for="male"><span>Male</span></label>
						
						<input id="female" type="radio" name="gender" value="female">
						<label for="female"><span>Female</span></label>
					</div>

				</div>

				<div class="Input-item">
					<p>Fill in your weight <span>in kg</span></p>
					<input class="check" placeholder="0kg">
				</div>

				<div class="Input-item">
					<p>Fill in height <span>in meters</span></p>
					<input class="check" placeholder="Current password">
				</div>

				<div class="Input-item">
					<p>Activity <span>based on a regular day</span></p>
					
					<select>
						<option value="non-active">non active (500kcal)</option>
						<option value="small">small amount</option>
						<option value="medium">medium amount</option>
						<option value="large">large amount</option>
					</select>
				</div>

				<div class="Input-item">
					<p>Activity <span>your goal</span></p>
					
					<select>
						<option value="lose-weight"><p>lose weight</p></option>
						<option value="average">average</option>
						<option value="gain">gain weight</option>
					</select>
				</div>

				<div class="Input-item">
					<p>Your goal <span>calculated for you</span></p>
					<input class="check" placeholder="2500 kcal">
				</div>
			</div>

			<div class="UserSettings-button update">
				<p>Let's Go!</p>
			</div>
		</div>

	</div>
</div>