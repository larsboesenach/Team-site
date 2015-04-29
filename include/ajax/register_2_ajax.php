<?php 
$height = htmlspecialchars($_POST['height']);
$weight = htmlspecialchars($_POST['weight']);
?>

	<div class="Setgoal-content">
				<p class="strongtitle">Almost there!</p>
				<p>Fill in your height and your weight, and you can start!</p>

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