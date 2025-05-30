<!doctype html>
<html lang="en">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/public/css/teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">

</head>
  <body>



  <div class="d-flex">
    <nav class="sidebar d-flex flex-column flex-shrink-0 position-fixed">
        <button class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-chevron-left"></i>
        </button>

        <div class="p-4">
            <h4 class="logo-text fw-bold mb-0">NexusFlow</h4>
            <p class="text-muted small hide-on-collapse">Dashboard</p>
        </div>

        <div class="nav flex-column">
            <a href="#" class="sidebar-link active text-decoration-none p-3">
                <i class="fas fa-home me-3"></i>
                <span class="hide-on-collapse">Dashboard</span>
            </a>
            <a href="#" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-chart-bar me-3"></i>
                <span class="hide-on-collapse">Analytics</span>
            </a>
            <a href="#" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-users me-3"></i>
                <span class="hide-on-collapse">Customers</span>
            </a>

            <a href="#" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-box me-3"></i>
                <span class="hide-on-collapse">Products</span>
            </a>
            <a href="#" class="sidebar-link text-decoration-none p-3">
                <i class="fas fa-gear me-3"></i>
                <span class="hide-on-collapse">Settings</span>
            </a>
        </div>

        <div class="profile-section mt-auto p-4">
            <div class="d-flex align-items-center">
                <img src="https://randomuser.me/api/portraits/women/70.jpg" style="height:40px" class="rounded-circle" alt="Profile">
                <div class="ms-3 profile-info">
                    <h6 class="text-white mb-0">Alex Morgan</h6>
                    <small class="text-muted">Admin</small>
                </div>
            </div>
        </div>
    </nav>

    <main class="main-content">
        <div class="container-fluid">
            <h2>Welcome to NexusFlow</h2>
            <p class="text-muted">Streamline your workflow with our intuitive dashboard.</p>
        </div>
    </main>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('collapsed');
        }
    </script>
</div>



  </body>
</html>