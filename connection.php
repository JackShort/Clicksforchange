<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "clickforchange_db";

	//create connection
	$conn = mysql_connect($servername, $username, $password)
		or die("Could not connect");
	$selected = mysql_select_db($db);

	// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	// $server = $url["host"];
	// $username = $url["user"];
	// $password = $url["pass"];
	// $db = substr($url["path"], 1);

	// $conn = mysql_connect($server, $username, $password)
	// 	or die("Could not connect");
	// $selected = mysql_select_db($db);

//don't touch this one
// $conn = new mysqli($server, $username, $password, $db);
?>