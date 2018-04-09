<?php 

	class Pessoa {

		public $nome;//Atributo

		public function falar(){//Método

			return "O meu nome é ".$this->nome;//$this se refere ao objeto
			
		}


	}

	$luiz = new Pessoa();
	$luiz->nome = "Luiz Ferreira";
	echo $luiz->falar();
 ?>