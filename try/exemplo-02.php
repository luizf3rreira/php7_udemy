<?php 

function trataNome ($name) {

	if (!$name) {
		throw new Exception("Nenhum nome foi informado", 1);
	}

	echo ucfirst($name) . "<br>";

}

try {

	trataNome("joao");
	trataNome("");

} catch(Exception $e) {

	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));

	//echo $e->getMessage();

} finally {

	echo "Executou o Tray!";

}


 ?>