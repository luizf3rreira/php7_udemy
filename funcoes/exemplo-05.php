<?php 

	$a = 10;
	//Passagem de parametro por referencia variável com &
	function trocaValor(&$a){

		$a += 50;

		return $a;
	}

	echo trocaValor($a);
	echo "<br>";
	echo $a;

 ?>