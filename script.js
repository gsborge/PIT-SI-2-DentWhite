// const botoes = document.querySelectorAll('.botao');
const botoes = document.querySelectorAll('.botao[data-nome][data-preco]');
const tabela = document.querySelector('table tbody');
const subtotalSpan = document.querySelector('aside .info div span:last-child');
const totalSpan = document.querySelector('aside footer span:last-child');
const btnLimpar = document.getElementById('limpar');

let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

function salvarEAtualizarCarrinho() {
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    atualizarCarrinhoTela();
}

function atualizarCarrinhoTela() {
    if (!tabela) return; 

    tabela.innerHTML = "";
    let subtotal = 0;

    if (carrinho.length === 0) {
        tabela.innerHTML = `<tr><td colspan="5" style="text-align:center;">Seu carrinho está vazio 😕</td></tr>`;
        if (subtotalSpan) subtotalSpan.textContent = "R$ 0,00";
        if (totalSpan) totalSpan.textContent = "R$ 0,00";
    } else {
        carrinho.forEach((item, index) => {
            
            if (!item || !item.nome || typeof item.preco !== 'number' || isNaN(item.preco)) {
                console.warn("Item inválido no carrinho sendo pulado:", item);
                return;
            }

            const totalItem = item.preco * item.quantidade;
            subtotal += totalItem;

            const tr = document.createElement('tr');
            tr.innerHTML = `
                <td>
                    <div class="product">
                        <img src="${item.img}" alt="${item.nome}">
                        <div class="info">
                            <div class="name">${item.nome}</div>
                            <div class="category">Produto odontológico</div>
                        </div>
                    </div>
                </td>
                <td>R$ ${item.preco.toFixed(2)}</td>
                <td>
                    <div class="qty">
                        <button class="menos" data-index="${index}"><i class='bx bx-minus'></i></button>
                        <span>${item.quantidade}</span>
                        <button class="mais" data-index="${index}"><i class='bx bx-plus'></i></button>
                    </div>
                </td>
                <td>R$ ${totalItem.toFixed(2)}</td>
                <td><button class="remove" data-index="${index}"><i class='bx bx-x'></i></button></td>
            `;
            tabela.appendChild(tr);
        });

        if (subtotalSpan) subtotalSpan.textContent = `R$ ${subtotal.toFixed(2)}`;
        if (totalSpan) totalSpan.textContent = `R$ ${subtotal.toFixed(2)}`;

        atualizarBotoesInternos();
    }
}

function atualizarBotoesInternos() {
    document.querySelectorAll('.mais').forEach(btn => {

        btn.replaceWith(btn.cloneNode(true));
    });
    document.querySelectorAll('.menos').forEach(btn => {
        btn.replaceWith(btn.cloneNode(true));
    });
    document.querySelectorAll('.remove').forEach(btn => {
        btn.replaceWith(btn.cloneNode(true));
    });

    document.querySelectorAll('.mais').forEach(btn => {
        btn.addEventListener('click', () => {
            const i = btn.dataset.index;
            if(carrinho[i]) {
              carrinho[i].quantidade++;
              salvarEAtualizarCarrinho();
            }
        });
    });

    document.querySelectorAll('.menos').forEach(btn => {
        btn.addEventListener('click', () => {
            const i = btn.dataset.index;
            if(carrinho[i]) {
              if (carrinho[i].quantidade > 1) {
                  carrinho[i].quantidade--;
              } else {
                  carrinho.splice(i, 1); 
              }
              salvarEAtualizarCarrinho();
            }
        });
    });

    document.querySelectorAll('.remove').forEach(btn => {
        btn.addEventListener('click', () => {
            const i = btn.dataset.index;
            if(carrinho[i]) {
              carrinho.splice(i, 1);
              salvarEAtualizarCarrinho();
            }
        });
    });
}

if (botoes.length > 0) {
    botoes.forEach(botao => {
        botao.addEventListener('click', (e) => {
            e.preventDefault();

            const nome = botao.dataset.nome;
            const precoStr = botao.dataset.preco;
            const img = botao.dataset.img || "https://via.placeholder.com/100x120";

            if (!nome || !precoStr) {
                console.error("Botão de produto sem 'data-nome' ou 'data-preco'.", botao);
                alert("Erro ao adicionar o produto. Dados do produto estão faltando.");
                return;
            }

            const preco = parseFloat(precoStr);

            if (isNaN(preco) || preco <= 0) {
                console.error("Preço do produto é inválido.", precoStr);
                alert("Erro: preço do produto é inválido.");
                return;
            }

            const produtoExistente = carrinho.find(item => item.nome === nome);

            if (produtoExistente) {
                produtoExistente.quantidade += 1;
            } else {
                carrinho.push({ nome, preco, img, quantidade: 1 });
            }

            salvarEAtualizarCarrinho();
            alert(`${nome} foi adicionado ao carrinho!`);
        });
    });
}

if (btnLimpar) {
    btnLimpar.addEventListener('click', () => {
        if (confirm("Tem certeza que deseja limpar o carrinho?")) {
            carrinho = [];
            salvarEAtualizarCarrinho();
        }
    });
}
const btnFinalizar = document.getElementById('finalizarCompra');

if (btnFinalizar) {
  btnFinalizar.addEventListener('click', () => {
    const carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

    if (carrinho.length === 0) {
      alert("Seu carrinho está vazio!");
      return;
    }

    fetch('finalizar_compra.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(carrinho)
    })
      .then(res => res.text())
      .then(data => {
        alert("✅ Compra finalizada com sucesso!");
        console.log("Resposta do servidor:", data);

        localStorage.removeItem('carrinho');
        location.reload();
      })
      .catch(err => {
        console.error("Erro ao enviar:", err);
        alert("❌ Erro ao finalizar compra. Tente novamente.");
      });
  });
}

if (tabela) {
    atualizarCarrinhoTela();
}