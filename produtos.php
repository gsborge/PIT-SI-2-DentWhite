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
  <main>
    <div class="grid">
      <div class="itens">
        <div class="card">
          <img src="img/alicate-perfurador-ainsworth-golgran-344301.jpg" class="icon" alt="">
          <h2>Alicate Perfurador Ainsworth - Golgran</h2>
          <p class="preco">R$: 129,99</p>
          <P class="descricao"><STRONG>Alicate Perfurador Ainsworth</STRONG> - O Alicate Perfurador Ainsworth da Golgran é um instrumento odontológico essenciaL para profissionais da odontologia que buscam excelência no isolamento absoluto. Com design ergonômico e funcionalidade de alto padrão, este material odontológico oferece precisão na perfuração do dique de borracha, sendo indispensável em consultórios odontológicos que priorizam qualidade e eficiência.</P>
          <a href="#" class="botao" data-img="img/alicate-perfurador-ainsworth-golgran-344301.jpg" data-nome="Alicate Perfurador Ainsworth - Golgran" data-preco="129.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/pinca-clinica-para-algodao-fava-107750-dental-cremer.jpg" class="icon" alt="">
          <h2>Pinça Clínica Para Algodão - Fava</h2>
          <p class="preco">R$: 12,99</p>
          <P class="descricao"><STRONG>Pinça Clínica Para Algodão - Fava</STRONG> A Pinça Clínica para Algodão Fava é um dos instrumentais odontológicos essenciais em qualquer consultório. Projetada para oferecer precisão e segurança, essa pinça odontológica é fabricada com material de alta qualidade, garantindo resistência e durabilidade em diversos procedimentos clínicos.</P>
          <a href="#" class="botao" data-img="img/pinca-clinica-para-algodao-fava-107750-dental-cremer.jpg" data-nome="Pinça Clínica Para Algodão - Fava" data-preco="12.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/424072.jpg" class="icon" alt="">
          <h2>Bráquete de Aço Roth Max 022 - Morelli</h2>
          <p class="preco">R$: 18,99</p>
          <P class="descricao"><STRONG>Bráquete de Aço Roth Max 022 - Morelli</STRONG> <br>* Com gancho nos caninos e pré-molares. * Ângulo dos caninos: 13º. <br>* O desenho anatômico do perfil e gancho com superfície arredondada, promovem a acomodação da mucosa proporcionando conforto ao paciente. <br>* A ausência de cantos vivos evita o atrito e resulta em deslize mais suave do fio ortodôntico. <br>* Slots com arestas arredondadas permitem a movimentação dos arcos mesmo em apinhamentos e desnivelamentos extremos. <br>* O desenho das bases promove a adaptação dos bráquetes às curvaturas cérvico-oclusais e mésio distais da superfície dentária. <br>* Pinos redondos com superfície jateada emoldurados em contenção periférica com abertura oclusal para a saída do excesso de resina.</P>
          <a href="#" class="botao" data-img="img/424072.jpg" data-nome="Bráquete de Aço Roth Max 022 - Morelli" data-preco="18.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/alginato-tipo-i-jeltrate-plus-dentsply-277319.jpg" class="icon" alt="">
          <h2>Alginato Tipo I Jeltrate Plus - Dentsply Sirona</h2>
          <p class="preco">R$: 60,99</p>
          <P class="descricao"><STRONG>Alginato Tipo I Jeltrate Plus - Dentsply Sirona</STRONG> O Alginato Tipo I Jeltrate Plus da Dentsply Sirona é uma escolha confiável e eficiente para moldagens odontológicas de alta precisão. Indicado para profissionais que buscam desempenho superior, oferece rapidez, estabilidade dimensional e excelente reprodução de detalhes.</P>
          <a href="#" class="botao" data-img="img/alginato-tipo-i-jeltrate-plus-dentsply-277319.jpg" data-nome="Alginato Tipo I Jeltrate Plus - Dentsply Sirona" data-preco="60.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/imagem-padrao-venda-sob-prescricao-medica.jpg" class="icon" alt="">
          <h2>Anestésico Alphacaine 2% 1:100.000 - DFL</h2>
          <p class="preco">R$: 173,00</p>
          <P class="descricao"><STRONG>Anestésico Alphacaine 2% 1:100.000 - DFL</STRONG>Produto de uso exclusivamente profissional. Alphacaine é um medicamento, seu uso pode trazer riscos, procure um médico ou um farmacêutico. Leia a bula. Medicamentos podem causar efeitos indesejados, evite a automedicação: informe-se com o farmacêutico.</P>
          <a href="#" class="botao" data-img="img/imagem-padrao-venda-sob-prescricao-medica.jpg" data-nome="Anestésico Alphacaine 2% 1:100.000 - DFL" data-preco="173.00">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/luva-para-procedimento-latex-com-po-medix-dc29978-dental-cremer.jpg" class="icon" alt="">
          <h2>Luva para Procedimento Látex com Pó - Medix</h2>
          <p class="preco">R$: 28,99</p>
          <P class="descricao"><STRONG>Luva para Procedimento Látex com Pó - Medix</STRONG> Desenvolvida com látex de borracha 100% natural, a Luva de Procedimento de Látex com Pó Medix é projetada para facilitar a colocação e a retirada, proporcionando agilidade nos atendimentos e maior bem-estar ao profissional durante o uso prolongado. Feita nos tamanhos PP ao G (vendidos separadamente, consulte disponibilidade), permite ajuste ideal ao formato da mão, oferecendo precisão nos movimentos clínicos e uma eficaz barreira contra riscos biológicos e contaminações.</P>
          <a href="#" class="botao" data-img="img/luva-para-procedimento-latex-com-po-medix-dc29978-dental-cremer.jpg" data-nome="Luva para Procedimento Látex com Pó - Medix" data-preco="28.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/rolo-para-esterilizacao-30cmx100m-148498.jpg" class="icon" alt="">
          <h2>Rolo para Esterilização 30cm X 100m - Masterdent</h2>
          <p class="preco">R$: 208,90</p>
          <P class="descricao"><STRONG>Rolo para Esterilização 30cm X 100m - Masterdent</STRONG> Características do Rolo para Esterilização 30cm X 100m Embalagem de esterilização de alta resistência, com eficiente barreira de filtração. Resistente contra rasgos, impresso com indicador tipo 1 que reage ao processo de esterilização. Atóxico, com tripla selagem lateral e sem liberação de partículas. Compatível com esterilização a vapor. Produto de uso único.</P>
          <a href="#" class="botao" data-img="img/rolo-para-esterilizacao-30cmx100m-148498.jpg" data-nome="Rolo para Esterilização 30cm X 100m - Masterdent" data-preco="208.90">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
      <div class="itens">
        <div class="card">
          <img src="img/turbina-ax1-led-fg-pb-gnatus-947359-3.jpg" class="icon" alt="">
          <h2>Turbina AX1 LED PB - Gnatus</h2>
          <p class="preco">R$: 1.264,99</p>
          <P class="descricao"><STRONG>Turbina AX1 LED PB - Gnatus</STRONG> A Turbina AX1 LED FG PB da Gnatus é ideal para profissionais que buscam peça de mão de alta rotação e que possibilite precisão, durabilidade e leveza com procedimentos odontológicos. Com formato ergonômico, a Turbina apresenta sistema Push Button que permite troca rápida das brocas e rolamentos apoiados em anéis de borracha que reduzem o nível de ruído do produto.</P>
          <a href="#" class="botao" data-img="img/turbina-ax1-led-fg-pb-gnatus-947359-3.jpg" data-nome="Turbina AX1 LED PB - Gnatus" data-preco="1264.99">ADICIONAR AO CARRINHO</a>
        </div>
      </div>
    </div>
  </main>
  <script src="script.js"></script>
</body>

</html>