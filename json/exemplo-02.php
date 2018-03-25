<?php 
	$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glauci","idade":25}]';

	$data = json_decode($json, true);

	var_dump($data);
 ?>