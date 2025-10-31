<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Conta criada com sucesso!'); window.location='login.php';</script>";
  } else {
    echo "<script>alert('Erro ao criar conta!');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/dentwhite/style.css">
  <title>Criar Conta - Dent White</title>
  <style>
    body {
      background-color: black;
    }
  </style>
</head>

<body>
  <header>
    <div id="menu"></div>
    <script>
      fetch("nav.php")
        .then(res => res.text())
        .then(data => {
          document.getElementById("menu").innerHTML = data;
        });
    </script>
  </header>

  <main>
    <form method="POST" class="forms">
      <h1>SEJA UM CLIENTE DENT WHITE</h1>
      <div>
        <label for="nome">NOME:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div>
        <label for="email">EMAIL:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="senha">SENHA:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <button type="submit">CRIAR CONTA</button>
      <p>
        Já tem conta?
        <a href="login.php">Clique aqui para entrar!</a>
      </p>
    </form>
  </main>
</body>
</html>
