<?php

$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$servico = $_POST['servico'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';

if (!$nome || !$telefone || !$mensagem) {
    echo "Preencha todos os campos.";
    exit;
}

$para = "contato@serviexpress.com.br"; // <-- TROQUE AQUI
$assunto = "Novo contato do site";

$conteudo = "
Nome: $nome
Telefone: $telefone
Serviço: $servico

Mensagem:
$mensagem
";

$headers = "From: contato@serviexpress.com.br";

// Enviar
if (mail($para, $assunto, $conteudo, $headers)) {
    echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href='index.php';</script>";
} else {
    echo "Erro ao enviar.";
}
