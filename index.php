 <?php 
	//start session
 	if (!isset($_SESSION["donated"])) {
 		$_SESSION["donated"] = False;
 	}
	if ($_SESSION["donated"] == True) {
		header('Location: twice.php');
	}
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

		<!-- Main stylesheeet -->
		<link rel="stylesheet" href="css/main.css">

		<!-- Hover css -->
		<link rel="stylesheet" href="css/hover.css">

		<!-- Open Sans font -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600,800' rel='stylesheet' type='text/css'>

		<!-- Source Code Pro Font -->
		<link href='https://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>

		<!-- Roboto -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-68266810-1', 'auto');
		  ga('send', 'pageview');
		</script>

		<!-- PopAds.net Popunder Code for www.clicks4change.com -->
		<script type="text/javascript">
		  var _pop = _pop || [];
		  _pop.push(['siteId', 887947]);
		  _pop.push(['minBid', 0.000000]);
		  _pop.push(['popundersPerIP', 0]);
		  _pop.push(['delayBetween', 0]);
		  _pop.push(['default', false]);
		  _pop.push(['defaultPerDay', 0]);
		  _pop.push(['topmostLayer', false]);
		  (function() {
		    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
		    var s = document.getElementsByTagName('script')[0]; 
		    pa.src = '//c1.popads.net/pop.js';
		    pa.onerror = function() {
		      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
		      sa.src = '//c2.popads.net/pop.js';
		      s.parentNode.insertBefore(sa, s);
		    };
		    s.parentNode.insertBefore(pa, s);
		  })();
		</script>
		<!-- PopAds.net Popunder Code End -->

	</head>

	<body>
	
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

			<div class="form-container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 title-box">
						<h2 class="title">Clicks4Change</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 menu">
						<h3 class="under-title">Choose a charity to donate ad revenue to:</h3>
						<div class="col-sm-6">
							<form action="donated.php" method="post" id="form">
								<?php
									include 'connection.php';

									$query = 'SELECT * FROM charities';
									$result = mysql_query($query);

									while ($charity = mysql_fetch_array($result)) {
										echo "<div class='row top-buffer radio-button-div'>";
											echo "<input type='radio' class='' name='charity' id='" . $charity["Name"] . "' value='" . $charity["Name"] . "'/> " . $charity["Name"] . "";
										echo "</div>";
									}
								?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-2 col-sm-offset-5 text-center">
							<div class="row box-green top-large-buffer">
								<button type="submit" class="donate-button btn-block hvr-underline-reveal hvr-pop"><span>Donate</span> <span class='glyphicon glyphicon-heart'></span></button>
							</div>
					</div>
						</form>

				</div>
			</div>

		</div>

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