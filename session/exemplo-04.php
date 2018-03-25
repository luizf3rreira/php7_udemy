<?php 

	session_id("j4in96u7fuas58ji4b06gof3r4");

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);

 ?>