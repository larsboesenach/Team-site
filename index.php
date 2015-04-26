
<?php include('header.php'); ?>
<!-- ---------------------- -->
<!-- The head closes here on this page -->


<!-- ------------------ -->
</head>
<body>

<!-- ------------------ -->
<?php// include('includes/navigation.php'); ?>
<!-- ------------------ -->


<div class="page-wrap">
<div class="Homepage">

<?php include('sidebar.php'); ?>

<div class="SidebarFix">	
	<div class="Content-wrap">
		<?php include('includes/UserSettings.php'); ?>

		<div class="Top-bar">
			<div class="Topbar-Logo">
				<a href="#">
					<img src="img/cc_full-logo.svg">
				</a>
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
				<h2>Todays Progress !</h2>
			</div>


			<div class="Entry-contents">
				<h2 class="Entry-intake">Intake</h2>

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
						<tr>
							<td><p>03x</p></td>
							<td><p>special K bar</p></td>
							<td><p>150</p></td>
						</tr>

					</table>
				</div><!-- entries -->
				
				<h2 class="Entry-exercise">Exercise</h2>

				<div class="Entry-entries">
					<table class="fitness">
						<tr>
							<td><p>Time</p></td>
							<td><p>Intensity</p></td>
							<td><p>Workout name</p></td>
							<td><p>Kilo Calories (KCAL)</p></td>
						</tr>
						<!-- -------------- -->
						<tr>
							<td><p>0,5h</p></td>
							<td><p>medium</p></td>
							<td><p>running</p></td>
							<td><p>595</p></td>
						</tr>
						<tr>
							<td><p>0,5h</p></td>
							<td><p>hard</p></td>
							<td><p>fitness</p></td>
							<td><p>500</p></td>
						</tr>
						<tr>
							<td><p>1h</p></td>
							<td><p>hard</p></td>
							<td><p>fitness</p></td>
							<td><p>500</p></td>
						</tr>
					</table>
				</div><!-- entries -->
				
				<div class="Add-Button" id="Add-Button"><p>+</p></div>

				<div class="Entry-emptyspace"></div>

				<div class="Entry-make-new-entry">
					<p>Make a new entry</p>
				</div>

				<div class="Entry-input-form">
					<div class="Make-entry-content">
						
						<div class="text-center">
							<div class="radio">
								<input id="intake" type="radio" name="IntOrEx" value="intake">
								<label for="intake"><span>Intake</span></label>
								
								<input id="exercise" type="radio" name="IntOrEx" value="exercise">
								<label for="exercise"><span>Exercise</span></label>
							</div>
						</div>

						<table>							
							<tr class="intake-field show Uppercase">
								<td><p>amount</p></td>
								<td><p>prod. name</p></td>
								<td><p>calories</p></td>
							</tr>

							<tr class="intake-field show">
								<td class="amount"><input placeholder="2x" type="text"></td>
								<td class="prodname"><input placeholder="pizza" type="text"></td>
								<td class="calories"><input placeholder="1000" type="text"></td>
							</tr>
						</table>

						<table>
							<tr class="exercise-field hidden Uppercase">
								<td><p>intensity</p></td>
								<td><p>time</p></td>
								<td><p>workout name</p></td>
								<td><p>calories</p></td>
							</tr>

							<tr class="exercise-field hidden">
								<td class="intensity"><input placeholder="hard" type="text"></td>
								<td class="time"><input placeholder="0.5h" type="text"></td>
								<td class="workout"><input placeholder="running" type="text"></td>
								<td class="calories"><input placeholder="250" type="text"></td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</div><!-- Content-entry -->
	</div><!-- Content-wrap -->

</div><!-- Sidebar-fix -->

</div><!-- Homepage -->
<!-- ---------------------- -->
<?php include('footer.php'); ?>