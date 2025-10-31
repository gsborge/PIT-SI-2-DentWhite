<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $total = $_POST["total"];

  $sql = "INSERT INTO pedidos (nome_cliente, email_cliente, total)
          VALUES ('$nome', '$email', '$total')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Compra finalizada com sucesso!'); window.location='index.html';</script>";
  } else {
    echo "<script>alert('Erro ao finalizar compra!');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <title>Finalizar Compra</title>
</head>
<body>
  <h1>FINALIZAR COMPRA</h1>
  <form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Total (R$):</label><br>
    <input type="text" name="total" required><br><br>

    <button type="submit">Finalizar</button>
  </form>
</body>
</html>
