<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <title>Dent White</title>
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
  <section class="sobre">
    <div class="texto">
      <img src="img/3cortadinha.png" class="dentimg" alt="">
      <h1>Somos a Dent White</h1>
      <br>
      <p>Nascemos para vender a auto estima com base no seu sorriso, venha fazer parte da maior rede de produtos oodontologicos do Centro-Oeste!</p>
      <br>
      <p>Faça seu cadastro clicando <a href="conta.php">aqui!</a></p>
      <br>
      <p>Este é um projeto do curso de Sistemas de Informação, pela universidade UNICSUL, campos UDF em Brasília-DF.</p>
    </div>
  </section>
</body>

</html>