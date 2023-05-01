<?php
	session_unset();
	session_destroy();
	header("Location: mandvi_login.php");
?>