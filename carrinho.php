<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
  <link rel="stylesheet" href="car.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <title>Dent White</title>
</head>

<body>
  <div id="menu"></div>
  <script>
    fetch("nav.php")
      .then(res => res.text())
      .then(data => {
        document.getElementById("menu").innerHTML = data;
      });
  </script>
  <main>
    <div class="page-title">Seu Carrinho</div>
    <div class="content">
      <section>
        <table>
          <thead>
            <tr>
              <th>Produto</th>
              <th>Preço</th>
              <th>Quantidade</th>
              <th>Total</th>
              <th>-</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product">
                  <img src="https://picsum.photos/100/120" alt="" />
                  <div class="info">
                    <div class="name">Nome do produto</div>
                    <div class="category">Categoria</div>
                  </div>
                </div>
              </td>
              <td>R$ 120</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>2</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 240</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="product">
                  <img src="https://picsum.photos/100/120" alt="" />
                  <div class="info">
                    <div class="name">Nome do produto</div>
                    <div class="category">Categoria</div>
                  </div>
                </div>
              </td>
              <td>R$ 120</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>2</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 240</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
            <tr>
              <td>
                <div class="product">
                  <img src="https://picsum.photos/100/120" alt="" />
                  <div class="info">
                    <div class="name">Nome do produto</div>
                    <div class="category">Categoria</div>
                  </div>
                </div>
              </td>
              <td>R$ 120</td>
              <td>
                <div class="qty">
                  <button><i class="bx bx-minus"></i></button>
                  <span>2</span>
                  <button><i class="bx bx-plus"></i></button>
                </div>
              </td>
              <td>R$ 240</td>
              <td>
                <button class="remove"><i class="bx bx-x"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
      <aside>
        <div class="box">
          <header class="back-box">Resumo da compra</header>
          <div class="info">
            <div><span>Sub-total</span><span>R$ 418</span></div>
            <div><span>Frete</span><span>Gratuito</span></div>
          </div>
          <footer>
            <span>Total</span>
            <span>R$ 418</span>
          </footer>
        </div>
        <button id="finalizarCompra" class="botao">Finalizar Compra</button>
      </aside>
    </div>
  </main>
  <script src="script.js"></script>
</body>

</html>