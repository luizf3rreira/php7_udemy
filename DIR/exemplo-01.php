<?php 

$name = "imagens";

if (!is_dir($name)) {
	mkdir($name);
	echo "diretório criado com sucesso";
} else {
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}

 ?>