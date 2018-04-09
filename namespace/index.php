<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Luiz Ferreira");
$cad->setEmail("luiz.f3rreira@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

 ?>