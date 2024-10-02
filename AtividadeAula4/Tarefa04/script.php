<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados dos campos do formulário
    $avaliacao = isset($_POST['avaliacao']) ? htmlspecialchars($_POST['avaliacao']) : null;
    $selecao = htmlspecialchars(trim($_POST['selecao']));
    $outras = htmlspecialchars(trim($_POST['outras']));
    $comentarios = htmlspecialchars(trim($_POST['comentarios']));
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['e-mail']));
    $fone = htmlspecialchars(trim($_POST['fone']));
    $novidades = isset($_POST['novidades']) ? 'Sim' : 'Não';

    // Verifica se campos obrigatórios estão preenchidos
    $erro = false;
    if (empty($nome) || empty($email)) {
        $erro = true;
    }
} else {
    $erro = true;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dados Recebidos</title>
</head>
<body>

<div class="container mt-5">
    <?php if ($erro): ?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Erro!</h4>
            <p>Por favor, preencha todos os campos obrigatórios (Nome e E-mail).</p>
        </div>
    <?php else: ?>
        <div class="card p-4">
            <h2 class="text-primary">Dados enviados com sucesso:</h2>

            <p><strong>Avaliação:</strong> <?= $avaliacao ? $avaliacao : "Não informado" ?></p>
            <p><strong>Seção preferida:</strong> <?= $selecao ?></p>
            <p><strong>Outra seção:</strong> <?= !empty($outras) ? $outras : "Nenhuma" ?></p>
            <p><strong>Comentários:</strong> <?= !empty($comentarios) ? $comentarios : "Nenhum comentário" ?></p>

            <h3 class="text-success">Informações pessoais:</h3>
            <p><strong>Nome:</strong> <?= $nome ?></p>
            <p><strong>E-mail:</strong> <?= $email ?></p>
            <p><strong>Telefone:</strong> <?= !empty($fone) ? $fone : "Não informado" ?></p>
            <p><strong>Receber novidades:</strong> <?= $novidades ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
