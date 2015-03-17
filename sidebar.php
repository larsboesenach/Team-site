
<div class="Sidebar-wrap">
	<div class="Circle-wrap">
		<?php include("includes/circle.php") ?>
	</div>
	
	<div class="Sidebar-goal-wrap">
		<div class="Sidebar-goal">
			<h2>Goal: 2500</h2>	
		</div>
	</div>
	
	<div class="Sidebar-log-wrap">
		<div class="Sidebar-log">
			<div class="Week-wrap">
				<h2 class="Week-overview">Week overview</h2>
				
				<hr>
				
				<div class="Week-count">
					<input class="navigator left" type="submit" name="back_week" value="<" />
					
					<h2>Week 05</h2>
					<p>2 till 8 February</p>
					
					<input class="navigator right" type="submit" name="back_week" value=">" />
				</div>
				
				<hr>
				
				<div class="Week-output">
					<div class="Indicators">
						<table>
							<tr>
								<td class="day"><p>Day</p></td>
								<td class="exercise"><p>Exercise</p></td>
								<td class="kcal"><p>Kcal</p></td>
							</tr>
						</table>
					</div>
					
					<div class="Week-content">
						<table>
							<tr>
								<td class="day"><p>Monday</p></td>
								<td class="exercise"><p>720</p></td>
								<td class="kcal"><p>2100</p></td>
							</tr>
							<tr>
								<td class="day"><p>Thuesday</p></td>
								<td class="exercise"><p>230</p></td>
								<td class="kcal"><p>2320</p></td>
							</tr>
							<tr>
								<td class="day"><p>Wednesday</p></td>
								<td class="exercise"><p>0</p></td>
								<td class="kcal"><p>2050</p></td>
							</tr>
							<tr class="negative">
								<td class="day"><p>Thursday</p></td>
								<td class="exercise"><p>0</p></td>
								<td class="kcal"><p>2610</p></td>
							</tr>
							<tr>
								<td class="day"><p>Friday</p></td>
								<td class="exercise"><p>920</p></td>
								<td class="kcal"><p>2205</p></td>
							</tr>
							<tr class="empty">
								<td class="day"><p>Saturday</p></td>
								<td class="exercise"><p>0</p></td>
								<td class="kcal"><p>0</p></td>
							</tr>
							<tr class="empty">
								<td class="day"><p>Sunday</p></td>
								<td class="exercise"><p>0</p></td>
								<td class="kcal"><p>0</p></td>
							</tr>
						</table>
					</div><!-- Week-content -->

					<hr>

					<div class="Week-average">
						<table>
							<tr>
								<td class="left"><p>Average</p></td>
								<td class="right"><p>2310</p></td>
							</tr>
						</table>
					</div><!-- Week-Average -->

					<hr>

				</div><!-- Week-output -->
			</div><!-- Week-wrap -->
		</div><!-- Sidebar-log -->
	</div><!-- Sidebar-log-wrap -->
</div><!-- Sidebar-wrap -->
