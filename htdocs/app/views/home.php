<?php
  $hora = date('H');
  $saudacao = ($hora < 12) ? "Bom dia" : (($hora < 18) ? "Boa tarde" : "Boa noite");
  $nomeCompleto = htmlspecialchars($usuario['nome'] . ' ' . $usuario['sobrenome']);
?>

<main class="main-content">
    <div class="container-fluid">
        <h1><?= $saudacao ?>, <?= $nomeCompleto ?>!</h1>
        <p><strong>Email:</strong> <?= htmlspecialchars($usuario['email']) ?></p>
        <p><strong>Nível de acesso:</strong> <?= htmlspecialchars($usuario['nivel_acesso']) ?></p>
        <p><strong>Data de cadastro:</strong> <?= date('d/m/Y H:i', strtotime($usuario['data_cadastro'])) ?></p>
        <p><a href="/logout">Sair</a></p>
    </div>
</main>


