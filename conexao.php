<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "dentwhite";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
  die("Erro ao conectar: " . $conn->connect_error);
}
?>
