<?php
	include "db.php";
	session_start();
	/// for sign out
	if (isset($_GET)) {
		session_destroy();
		header("location: index.php");
	}


?>