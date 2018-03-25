
<?php 
// parametro ou argumento
// valores obrigatórios sempre a esquerda
	function ola($texto = "mundo", $periodo = "Bom dia"){
		return "Olá $texto! $periodo!<br>";
	}

	echo ola();
	echo ola("", "Boa noite");
	echo ola("Luiz", "Boa tarde");
	echo ola("Pedro", "");



 ?>