<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
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
    <div class="grid">
      <div class="itens">
        <div class="card">
          <img src="img/alicate-perfurador-ainsworth-golgran-344301.jpg" class="icon" alt="">
          <h2>Alicate Perfurador Ainsworth - Golgran</h2>
          <p class="preco">R$: 129,99</p>
          <a href="#" class="botao" data-img="img/alicate-perfurador-ainsworth-golgran-344301.jpg" data-nome="Alicate Perfurador Ainsworth - Golgran" data-preco="129.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/pinca-clinica-para-algodao-fava-107750-dental-cremer.jpg" class="icon" alt="">
          <h2>Pinça Clínica Para Algodão - Fava</h2>
          <p class="preco">R$: 12,99</p>
          <a href="#" class="botao" data-img="img/pinca-clinica-para-algodao-fava-107750-dental-cremer.jpg" data-nome="Pinça Clínica Para Algodão - Fava" data-preco="12.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/424072.jpg" class="icon" alt="">
          <h2>Bráquete de Aço Roth Max 022 - Morelli</h2>
          <p class="preco">R$: 18,99</p>
          <a href="#" class="botao" data-img="img/424072.jpg" data-nome="Bráquete de Aço Roth Max 022 - Morelli" data-nome="Bráquete de Aço Roth Max 022 - Morelli" data-preco="18.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/alginato-tipo-i-jeltrate-plus-dentsply-277319.jpg" class="icon" alt="">
          <h2>Alginato Tipo I Jeltrate Plus - Dentsply Sirona</h2>
          <p class="preco">R$: 60,99</p>
          <a href="#" class="botao" data-img="img/alginato-tipo-i-jeltrate-plus-dentsply-277319.jpg" data-nome="Alginato Tipo I Jeltrate Plus - Dentsply Sirona" data-preco="60.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/imagem-padrao-venda-sob-prescricao-medica.jpg" class="icon" alt="">
          <h2>Anestésico Alphacaine 2% 1:100.000 - DFL</h2>
          <p class="preco">R$: 173,00</p>
          <a href="#" class="botao" data-img="img/imagem-padrao-venda-sob-prescricao-medica.jpg" data-nome="Anestésico Alphacaine 2% 1:100.000 - DFL" data-preco="173.00">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/luva-para-procedimento-latex-com-po-medix-dc29978-dental-cremer.jpg" class="icon" alt="">
          <h2>Luva para Procedimento Látex com Pó - Medix</h2>
          <p class="preco">R$: 28,99</p>
          <a href="#" class="botao" data-img="img/luva-para-procedimento-latex-com-po-medix-dc29978-dental-cremer.jpg" data-nome="Luva para Procedimento Látex com Pó - Medix" data-preco="28.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/rolo-para-esterilizacao-30cmx100m-148498.jpg" class="icon" alt="">
          <h2>Rolo para Esterilização 30cm X 100m - Masterdent</h2>
          <p class="preco">R$: 208,90</p>
          <a href="#" class="botao" data-img="img/rolo-para-esterilizacao-30cmx100m-148498.jpg" data-nome="Rolo para Esterilização 30cm X 100m - Masterdent" data-preco="208.90">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/turbina-ax1-led-fg-pb-gnatus-947359-3.jpg" class="icon" alt="">
          <h2>Turbina AX1 LED PB - Gnatus</h2>
          <p class="preco">R$: 1.264,99</p>
          <a href="#" class="botao" data-img="img/turbina-ax1-led-fg-pb-gnatus-947359-3.jpg" data-nome="Turbina AX1 LED PB - Gnatus" data-preco="1264.00">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
    </div>

  </main>
  <script src="script.js"></script>
</body>

</html>