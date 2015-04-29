<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Team project website</title>
	
	<!-- jQuery link -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script rel="text/javascript" src="js/custom-js.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/circle-progress.js"></script>
	<!-- -------------- -->
	<!-- Bootstrap	-->
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
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

<!-- ---------------------- -->
<!-- The head closes here on this page -->


<!-- ------------------ -->
</head>
<body>

<!-- ------------------ -->
<div class="Nav-wrap">
	<div class="container">
		
		<a href="index.php">
			<div class="Logo-wrap">
				<div class="CC-img">
					<img src="img/CC_white.svg">
				</div>

				<div class="CC-text">
					<p>CalorieCountr</p>
				</div>
			</div>
		</a>
		
		
		<div class="SIGNIN-button">
			<a href="login.php">Sign in</a>
		</div>
	

	</div><!-- container -->
</div>
<!-- ------------------ -->

<div class="homepage">

<div class="Header-wrap" style data-parallax="scroll" data-image-src="img/Header-bg.jpg">
	<div class="container">
	
		<div class="Header-box">
			<p class="strongtitle">Keep track</p>
			<p>You eat everyday, healthy, maybe unhealthy, or everything in between. Get an overview of your daily calorie intake. </p><p> Starting is easy! In just 3 simple steps you will have your own Countr.cc log and you will be in control of your diet.</p>

			<div class="button-wrap">
				<a href="register.php">Start right now!</a>
			</div>
		</div>	

	</div>
</div><!-- Header-wrap -->

<div class="Content-entry">
	<div class="container">

		<div class="col-md-5">
			
			<div class="text-align-right">
			<div class="Home-circle-wrap">
				<div class="Circle-aligncenter">
				    <div id="circle">
				        <div class="Circle-goal top">
				            <p class="text"></p>
				        </div>
				    
				        <div class="Circle-goal hr">
				            <div class="hr--"></div>
				        </div>

				        <div class="Circle-goal bottom">
				            <p>2500</p>
				        </div>
				    </div>
				</div>
			</div>
			</div>

		</div><!-- colmd5 -->

		<div class="col-md-7">
			<div class="circle-text">
				<p class="strongtitle">Set your goal and work on it</p>
				<p>Countr.cc makes tracking your calories very easy and gives you a quick overview of your daily calorie intake. You are able to set your daily goal, and then you can start counting calories everyday.  Countr.cc is a tool that allows you more control over the ability to lose, gain or maintain weight.</p>
			</div>
		</div>

	</div>
</div>


<div class="Content-entry greyBG">
	<div class="container extra-pad">
		
		<p class="team-title strongtitle">Counting calories is easy!</p>

		<div class="col-md-4">
			<div class="Team-member-wrap">
				
				<div class="prof-img">
					<img src="img/icons-09.svg">
				</div>

				<p class="memberName">Easy logging!</p>

				<p>Your log will give you a daily overview, this log will, unlike this illustration, be easy to understand.</p>
				
			</div>
		</div>

		<div class="col-md-4">
			<div class="Team-member-wrap">
				
				<div class="prof-img">
					<img src="img/icons-10.svg">
				</div>

				<p class="memberName">Track the results!</p>

				<p>Countr.cc gives you an easy overview of your past intake so you have an overview of your past intake.</p>

			</div>
		</div>

		<div class="col-md-4">
			<div class="Team-member-wrap">
				
				<div class="prof-img">
					<img src="img/icons-11.svg">
				</div>

				<p class="memberName">Reach your goals!</p>

				<p>You will clearly see a difference after you have started, if you have a weight goal, pursue it now!</p>

			</div>
		</div>

	</div>
</div><!-- Content-entry -->

<div class="Footer-wrap">
	<div class="container">
		
		<div class="Footer-slogan">
			<p>Go and do something good today.</p>
			<a href="register.php" class="GetStartedButton">Get Started</a>
		</div>

	</div>
</div>


<script>
    $('#circle').circleProgress({
        value: 0.5,
        size: 180,
        startAngle: -Math.PI *0.5,
        thickness: 20,
        lineCap: 'round',
        fill: {
            gradient: ["#3ffb68", "#5ce0af"]
        },
    }).on('circle-animation-progress', function(event, progress, stepValue) {
    $(this).find('.text').html(parseInt(1250 * progress) + '<i>kcal</i>');
});
</script>

</div><!-- homepage -->