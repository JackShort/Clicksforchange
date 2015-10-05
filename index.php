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

					document.getElementById("timer-div").style.visibility = "hidden";
					document.getElementById("thanks").style.visibility = "visible";
					document.getElementById("thanks").innerHTML = "Thanks for waiting";
					document.getElementById("continue-button-div").style.visibility = "visible";
					document.getElementById("continue-button-div").innerHTML = '<div id="continue-button" class="col-sm-4 cojkl-sm-offset-4 text-center center"><button class="donate-again btn-block hvr-wobble-top" onclick="window.location.href=`donate.php`">Continue</button></div>';
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
		<div class="container-fluid bottom-buffer full-screen">
			<div style="position:absolute;" class="side-banner">
				<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=clicks00-20&o=1&p=14&l=ur1&category=amazonhomepage&f=ifr&linkID=VSHZLGQXDA66IAYF" width="160" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			</div>

			<div style="position:absolute; float:right; right:0px;" class="side-banner">
				<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=clicks00-20&o=1&p=14&l=ur1&category=topratedproducts&banner=11X1Y6FZ67GYSYVDDB02&f=ifr&linkID=IYQSP4CTKMRGUTPR" width="160" height="600" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
			</div>

			<div id="timer-div">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 text-center">
						<h2 id="thanks">Your Patience</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 text-center" id="continue-button-div">
						<p class="timer" id="skip">5</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 text-center">
						<h2>is your donation</h2>
					</div>
				</div>
			</div>

			<div class="row bottom-banner">
				<div class="col-sm-12 text-center">  
					<script type='text/javascript'>
					 amzn_assoc_ad_type = 'banner';
					 amzn_assoc_tracking_id = 'clicks00-20';
					 amzn_assoc_marketplace = 'amazon';
					 amzn_assoc_region = 'US';
					 amzn_assoc_placement = 'assoc_banner_placement_default';
					 amzn_assoc_linkid = 'GZRZTDEH63S2ZPZR';
					 amzn_assoc_campaigns = 'hotnewreleases';
					 amzn_assoc_banner_type = 'category';
					 amzn_assoc_isresponsive = 'true';
					</script>
					<script src='//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1'></script>
				</div>
			</div>

			<div class="row bottom-banner-mobile">
				<div class="col-sm-12 text-center">  
					<iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=clicks00-20&o=1&p=291&l=ur1&category=home&banner=1GKXDDAPYNK4EFM00JR2&f=ifr&linkID=ON47OYPVOE73VPYW" width="290" height="100" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
				</div>
			</div>

		</div>

		<?php
			$_SESSION["canDonate"] = True;
		?>

	</body>
</html>