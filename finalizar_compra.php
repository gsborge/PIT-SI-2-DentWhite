<?php
include("conexao.php");

$dados = json_decode(file_get_contents("php://input"), true);

if (!$dados || !is_array($dados)) {
    echo "Erro: dados inválidos.";
    exit;
}

$total = 0;
$listaProdutos = "";

foreach ($dados as $item) {
    $nome = $item['nome'] ?? 'Produto desconhecido';
    $quantidade = $item['quantidade'] ?? 1;
    $preco = $item['preco'] ?? 0;

    $subtotal = $quantidade * $preco;
    $total += $subtotal;

    $listaProdutos .= "$nome (x$quantidade) - R$ " . number_format($subtotal, 2, ',', '.') . "\n";
}

session_start();

$nome_cliente = $_SESSION['nome_cliente'] ?? "Cliente DentWhite";
$email_cliente = $_SESSION['email_cliente'] ?? "cliente@dentwhite.com";

$sql = "INSERT INTO pedidos (nome_cliente, email_cliente, produtos, total, data_pedido)
        VALUES ('$nome_cliente', '$email_cliente', '$listaProdutos', '$total', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "✅ Pedido registrado com sucesso!";
} else {
    echo "❌ Erro ao salvar pedido: " . $conn->error;
}

$conn->close();
?>
