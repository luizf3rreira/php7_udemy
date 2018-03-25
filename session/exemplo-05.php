<?php 

	require_once("config.php");

	echo session_save_path();

	var_dump(session_status());
	echo "<br>";
	switch (session_status()) {
		
		case PHP_SESSION_DISABLED:

			echo "Sessão desabilitada";
			break;
		
		case PHP_SESSION_NONE:
			echo "Sessão habilitada, mas ainda não existe";
			break;

		case PHP_SESSION_ACTIVE:
			echo "Sessão habilitada, e existe uma";
			break;

		default:
			# code...
			break;
	}
 ?>