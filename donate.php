<?jphp 
	session_start();

	if ($_SESSION["canDonate"] != True) {
		header('Location: index.php');
	}

	//uncomment this shit
	// $_SESSION["canDonate"] = False;
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