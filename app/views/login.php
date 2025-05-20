<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login | Rotin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/public/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/25c294f3631fb5a0c1ef659a85cabdcf?family=Sifonn-Pro" rel="stylesheet">
</head>
<body>
  <div class="login-box">
    <img src="/public/img/logo_rotin.png" alt="Logo Rotin">
    <p>Seja bem-vindo(a) ao <span class="logo-font">Rotin</span></p>
    <h1><span></span></h1>

    <?php
      if (isset($_SESSION['erro_login'])) {
        echo '<div class="erro-msg">' . $_SESSION['erro_login'] . '</div>';
        unset($_SESSION['erro_login']);
      }
    ?>

    <form method="POST" action="/login/autenticar">
      <div class="input-box">
        <i class="bi bi-envelope"></i>
        <input type="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="input-box">
        <i class="bi bi-shield-lock"></i>
        <input type="password" name="senha" placeholder="Senha" required>
      </div>
      <button class="btn-login" type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
