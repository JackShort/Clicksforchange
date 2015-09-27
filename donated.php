<?php 
	include('connection.php');

	session_start();
	$_SESSION["canDonate"] = False;

	function getStats() {
		$query = 'SELECT * FROM charities';
		$result = mysql_query($query);

		$votes = array();

		while ($charity = mysql_fetch_array($result)) {
			$votes[$charity['Name']] = $charity['Votes'];
		}

		return $votes;
	}

	function getUrls() {
		$query = 'SELECT * FROM charities';
		$result = mysql_query($query);

		$urls = array();

		while ($charity = mysql_fetch_array($result)) {
			$urls[$charity['Name']] = $charity['url'];
		}

		return $urls;
	}

	function printStats() {
		$votes = getStats();
		$urls = getUrls();
		$total = 0;

		foreach ($votes as $key => $value) {
			$total += $value;
		}

		foreach ($votes as $key => $value) {
			echo "<h3><a href='" . "$urls[$key]" . "' target='_blank' style='color:#333333;'>" . $key . "</a>: <span style='color: #FA3D79;'>" . round($value/$total, 2) * 100 . "%</span></h3>";
		}
	}

	function printTotal() {
		$votes = getStats();
		$total = 0;

		foreach ($votes as $key => $value) {
			$total += $value;
		}

		$totalMoney = (($total * 3) / 1000) * 5.56;
		echo "~ $" . number_format($totalMoney, 2) . " raised";
	}

	function restyle_text($input){
		$input = number_format($input);
		$input_count = substr_count($input, ',');
		if($input_count != '0'){
			if($input_count == '1'){
				return substr($input, 0, -4).'k';
			} else if($input_count == '2'){
				return substr($input, 0, -8).'m';
			} else if($input_count == '3'){
				return substr($input, 0,  -12).'b';
			} else {
				return;
			}
		} else {
			return $input;
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
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

		<!-- Main stylesheeet -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Hover css -->
		<link rel="stylesheet" href="css/hover.css">

		<!-- Open Sans font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800' rel='stylesheet' type='text/css'>

		<!-- Source Code Pro Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

	</head>

	<body style="">
	
	<!-- Facebook shit -->
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<!-- Done with that shit -->

		<div class="container-fluid bottom-buffer full-screen">

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 title-box">
					<div class="col-sm-8 col-sm-offset-2 text-center">
						<h2 class="title">Thanks for donating</h2>
						<p class="sub-title">to <?php echo $_POST["charity"]; ?></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 donated-menu">
					<div class="col-sm-6 col-sm-offset-3">
						<?php 
							printStats()
						 ?>
					</div>

					<div class="row">
						<div class="col-sm-4 col-sm-offset-4 text-center">
							<div class="donations-div">
								<p class="money"><?php printTotal() ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-sm-offset-4 text-center">
					<button class='donate-again btn-block hvr-wobble-top' onclick="window.location.href='index.php'">Donate Again</button>
				</div>
			</div>

		</div>

		<?php
			include 'connection.php';

			if ($_SESSION["donated"] != True) {
				$query = 'UPDATE charities SET Votes = Votes + 1 WHERE Name = ' . "'" . $_POST["charity"] . "'";
				// $query = "UPDATE charities SET `Votes` = `Votes` + 1 WHERE `Name` = " . "'" . $_POST["charity"] . "'";
				$result = mysql_query($query);
				$_SESSION["donated"] = True;
			}
		?>
			<footer class="footer">
				<div class="row-fluid">

					<div class="col-sm-6">
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.clicks4change.com/" data-text="I just helped someone by clicking a button. Every click can make a difference." data-hashtags="clicks4change">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					<div class="fb-share-button" style="float:left; margin-right:10px;" data-href="http://www.clicks4change.com/" data-layout="button_count"></div>
					</div>

					<div class="col-sm-6">
						<p class="footer-desc"><a href="about.php" target="_blank" class="about">About</a> | <a href="http://goo.gl/forms/AMYB2ZWrKA" target="_blank" class="suggestion">Suggestions</a></p>
					</div>
				</div>
			</footer>
	</body>
</html>