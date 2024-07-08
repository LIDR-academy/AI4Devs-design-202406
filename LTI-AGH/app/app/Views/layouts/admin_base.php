<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Administración de Puestos' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .navbar {
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
        }
        .navbar-brand {
            color: #fff !important;
        }
        .sidebar {
            width: 250px;
            background: #343a40;
            color: #fff;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 20px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
        }
        .footer {
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administración de Puestos</a>
        </div>
    </nav>

    <div class="sidebar">
        <h4>Menú</h4>
        <a href="/admin/job_posts"><i class="fas fa-briefcase"></i> Puestos</a>
        <a href="/admin/job_posts/create"><i class="fas fa-plus"></i> Crear Puesto</a>
        <a href="/admin/applications"><i class="fas fa-users"></i> Aplicaciones</a>
        <a href="/"><i class="fas fa-home"></i> FrontEnd</a>
    </div>

    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>&copy; <?= date('Y') ?> Administración de Puestos. Todos los derechos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>