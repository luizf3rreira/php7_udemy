<?php 

$conn = new PDO("mysql:dbname=dbpph7;host=localhost", "root", "123456");


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "luiz";
$password = "!@#$";

$stmt = bindParam(":LOGIN", $login);
$stmt = bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

 ?>