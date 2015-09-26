<?php 
	//start session
	session_start();
	$_SESSION["donated"] = False;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Clicks For Change</title>

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
	</head>

	<body style="">

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