<?php 
	//declaração de tipos ecalares
	function soma(int ...$valores){

		return array_sum($valores);

	}

	echo soma(2, 2);
	echo "<br>";
	echo soma(25, 33);
	echo "<br>";
	echo soma(1.5, 3.7);
	echo "<br>";

 ?>