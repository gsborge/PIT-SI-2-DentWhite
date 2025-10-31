<?php
include("conexao.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
  $resultado = $conn->query($sql);

  if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    
    $_SESSION['nome_cliente'] = $usuario['nome'];
    $_SESSION['email_cliente'] = $usuario['email'];
    
    echo "<script>alert('Login realizado com sucesso!'); window.location='index.php';</script>";
  } else {
    echo "<script>alert('E-mail ou senha incorretos!');</script>";
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
  <title>Login - Dent White</title>
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
      <h1>LOGIN</h1>
      <div>
        <label for="email">E-MAIL:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div>
        <label for="senha">SENHA:</label>
        <input type="password" name="senha" id="senha" required>
      </div>
      <button type="submit">ENTRAR</button>
      <p>
        Não tem conta? <a href="conta.php">Crie aqui!</a>
      </p>
    </form>
  </main>
</body>
</html>
