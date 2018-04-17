<?php 

$conn = new PDO("mysql:dbname=dbpph7;host=localhost", "root", "123456");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 1;

$stmt = bindParam(":ID, $id");

$stmt->execute();

echo "Delete OK!";

 ?>