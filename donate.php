<?php 
	session_start();

	if ($_SESSION["canDonate"] != True) {
		header('Location: index.php');
	}

	//uncomment this shit
	// $_SESSION["canDonate"] = False;
?>
