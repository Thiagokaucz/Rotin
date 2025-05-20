<!doctype html>
<html lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">

</head>
  <body>



  <div class="d-flex">
    <nav class="sidebar d-flex flex-column flex-shrink-0 position-fixed">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-chevron-left"></i>
        </button>

        <div class="p-4">
            <h4 class="logo-text fw-bold mb-0">Rotin</h4>
            <p class="text-white small hide-on-collapse">Auto Elétrica Borges</p>  <!-- A empresa -->
        </div>

        <div class="nav flex-column">
            <a href="/home" class="sidebar-link active text-decoration-none p-3">
                <i class="fas fa-home me-3"></i>
                <span class="hide-on-collapse">Home</span>
            </a>
            <a href="/painel" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-chart-bar me-3"></i>
                <span class="hide-on-collapse">Painel</span>
            </a>
            <a href="/usuario" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-users me-3"></i>
                <span class="hide-on-collapse">Usuário</span>
            </a>

            <a href="/relatorio" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-box me-3"></i>
                <span class="hide-on-collapse">Relatórios</span>
            </a>

            <?php if ($_SESSION['usuario']['nivel_acesso'] === 'adm'): ?>
                <a href="/registrar" class="sidebar-link text-decoration-none p-3">
                    <i class="fas fa-gear me-3"></i>
                    <span class="hide-on-collapse">Administrador</span>
                </a>
            <?php endif; ?>
        </div>

        <div class="profile-section mt-auto p-4">
            <div class="d-flex align-items-center">
                <img src="/<?= htmlspecialchars($_SESSION['usuario']['caminho_imagem'] ?? 'uploads/default.jpg') ?>" style="height:40px" class="rounded-circle" alt="Profile">
                <div class="ms-3 profile-info">
                    <h6 class="text-white mb-0"><?= htmlspecialchars($usuario['nome']) ?></h6>
                    
                    <small style="color:rgb(204, 122, 0);"><?= htmlspecialchars($usuario['nivel_acesso']) ?></small>



                </div>
            </div>
        </div>
    </nav>

        <?php
          // Verifica se a variável $viewPath está definida e se o arquivo existe
            require_once($viewPath);
        ?>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('collapsed');
        }
    </script>
</div>



  </body>
</html>