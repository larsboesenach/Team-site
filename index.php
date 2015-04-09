
<?php include('header.php'); ?>
<!-- ---------------------- -->
<!-- The head closes here on this page -->


<!-- ------------------ -->
</head>
<body>

<!-- ------------------ -->
<?php// include('includes/navigation.php'); ?>
<!-- ------------------ -->

<a class="button" href="login-screen.php">Go to temporary login screen</a>
<a class="addProgress" href="index.php?count=1250&goal=2500#">Add values to URL, so Progress circle works</a>

<div class="page-wrap">
<div class="Homepage">

<?php include('sidebar.php'); ?>

<div class="SidebarFix">	
	<div class="Content-wrap">
		<?php include('includes/UserSettings.php'); ?>
		
		<div class="Top-bar">
			<div class="Topbar-Logo">
				<img src="img/CC_white.svg">
				<p>Calorie Counter</p>
			</div>

			<div class="Topbar-User">
				<div class="UserWrap">
					<p>Kaasboer Hans</p>
					<div class="User-img" style="background-image: url('img/pikachu-userprofile.png')"></div>
				</div>
			</div>
		</div>

		<div class="Content-entry">
			<div class="Content-Logo">
				<img src="img/CC_grey.svg">
			</div>


			<div class="Entry-contents">
				<div class="Entry-overview">
					<table>
						<tr>
							<td><p>Date</p></td>
							<td><p>05/02/2015</p></td>
						</tr>
						<tr>
							<td><p>Food Entries</p></td>
							<td><p>4</p></td>
						</tr>
						<tr>
							<td><p>Exercise Entries</p></td>
							<td><p>2</p></td>
						</tr>
					</table>
				</div><!-- Entry-overview -->



				<div class="Entry-entries">
					<table class="intake">
						<tr>
							<td><p>Amount</p></td>
							<td><p>Product name</p></td>
							<td><p>Kilo Calories (KCAL)</p></td>
						</tr>
						<!-- -------------- -->
						<tr>
							<td><p>01x</p></td>
							<td><p>Pizza BBQ Cchicken</p></td>
							<td><p>1150</p></td>
						</tr>
						<tr>
							<td><p>02x</p></td>
							<td><p>banana</p></td>
							<td><p>200</p></td>
						</tr>
						<tr>
							<td><p>01x</p></td>
							<td><p>glass of milk</p></td>
							<td><p>60</p></td>
						</tr>
						<tr>
							<td><p>03x</p></td>
							<td><p>special K bar</p></td>
							<td><p>150</p></td>
						</tr>

					</table>
				</div><!-- values -->

				<div class="Entry-entries">
					<table class="fitness">
						<tr>
							<td><p>Minutes</p></td>
							<td><p>Intensity</p></td>
							<td><p>Workout name</p></td>
							<td><p>Kilo Calories (KCAL)</p></td>
						</tr>
						<!-- -------------- -->
						<tr>
							<td><p>30</p></td>
							<td><p>medium</p></td>
							<td><p>running</p></td>
							<td><p>595</p></td>
						</tr>
						<tr>
							<td><p>60</p></td>
							<td><p>hard</p></td>
							<td><p>fitness</p></td>
							<td><p>500</p></td>
						</tr>
					</table>
				</div><!-- entries -->
				
				<div class="Add-Button" id="Add-Button"><p>+</p></div>

				<div class="Entry-emptyspace"></div>

				<div class="Entry-make-new-entry">
					<hr>
					<p>Make a new entry</p>
				</div>

				<div class="Entry-input-form">
					<table>
						<tr>
							<td>consume</td>
							<td>exercize</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="consume" value="consume"></td>
							<td><input type="checkbox" name="exercise" value="exercise"></td>
						</tr>
						<tr>
							<td>amount</td>
							<td>prod. name</td>
							<td>calories</td>
						</tr>
						<tr>
							<td><input type="text"></td>
							<td><input type="text"></td>
							<td><input type="text"></td>
						</tr>
					</table>
				</div>

			</div>
		</div><!-- Content-entry -->
	</div><!-- Content-wrap -->

</div><!-- Sidebar-fix -->

</div><!-- Homepage -->
<!-- ---------------------- -->
<?php include('footer.php'); ?>