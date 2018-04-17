<?php 

$conn = new PDO("mysql:dbname=dbpph7;host=localhost", "root", "123456");


$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");

$login = "joão";
$password = "qwerty";
$id = 2;

$stmt = bindParam(":LOGIN", $login);
$stmt = bindParam(":PASSWORD", $password);
$stmt = bindParam(":ID, $id");

$stmt->execute();

echo "Alterado OK!";

 ?>