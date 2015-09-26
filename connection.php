<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "clickforchange_db";

	//create connection
	$conn = mysql_connect($servername, $username, $password)
		or die("Could not connect");
	$selected = mysql_select_db($db);
?>