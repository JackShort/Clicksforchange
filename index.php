<?php 
	//start session
	session_start();
	$_SESSION["donated"] = False;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="propeller" content="f8f24efd687cf940f21c5b393da0e13b" />
		<meta name="google-site-verification" content="po695k3_hlt1Ie5DYApFyaUox2VwZMBGYgUDgwbPn5M" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Clicks For Change</title>

		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="apple-touch-icon" href="../images/favicon.ico">

		<!-- latest compiled and minified css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- latest compiled and minified javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- Main Javascript -->
		<script src="scripts/main.js"></script>
		<script src="scripts/blockadblock.js"></script>

		<!-- Main stylesheeet -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Hover css -->
		<link rel="stylesheet" href="css/hover.css">

		<!-- Open Sans font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800' rel='stylesheet' type='text/css'>

		<!-- Source Code Pro Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

		<script>
			var time = 5;
			var timer = window.setInterval(function() {countdown()}, 1000);

			// Function called if AdBlock is not detected
			function adBlockNotDetected() {
			}
			// Function called if AdBlock is detected
			function adBlockDetected() {
				window.location.href = 'adblock.php';
			}

			// Recommended audit because AdBlock lock the file 'blockadblock.js' 
			// If the file is not called, the variable does not exist 'blockAdBlock'
			// This means that AdBlock is present
			if(typeof blockAdBlock === 'undefined') {
				adBlockDetected();
			} else {
				blockAdBlock.onDetected(adBlockDetected);
				blockAdBlock.onNotDetected(adBlockNotDetected);
				// and|or
				blockAdBlock.on(true, adBlockDetected);
				blockAdBlock.on(false, adBlockNotDetected);

				// and|or
				blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
			}

			// Change the options
			blockAdBlock.setOption('checkOnLoad', true);
			// and|or
			blockAdBlock.setOption({
				debug: true,
				checkOnLoad: true,
				resetOnEnd: false
			});
			

			function countdown() {
				time--;

				if (time == -1) {
					window.clearInterval(timer);
					window.location.href = 'donate.php';
				} else{
					document.getElementById('skip').innerHTML = time;
				}
			}
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-68266810-1', 'auto');
		  ga('send', 'pageview');
		</script>
	</head>

	<body>
		<script type='text/javascript' src='//go.oclasrv.com/apu.php?zoneid=409031'></script>
		<script type='text/javascript' src='//go.oclasrv.com/apu.php?zoneid=409031'></script>

		<div class="container-fluid bottom-buffer full-screen">

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<h2>Your Patience</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<p class="timer" id="skip">5</p>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 text-center">
					<h2>is your donation</h2>
				</div>
			</div>

		</div>

		<?php
			$_SESSION["canDonate"] = True;
		?>

	</body>
</html>