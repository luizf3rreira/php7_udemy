<?php 

if (!is_dir("images")) mkdir("images");

//scandir transforma o conteúdo de um diretório em um array
foreach (scandir("images") as $item) {
	if (!in_array($item, array(".", ".."))){
		unlink("images/".$item);
	}	
}

echo "ok";

 ?>