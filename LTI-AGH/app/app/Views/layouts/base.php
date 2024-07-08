<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?? 'Bolsa de Trabajo' ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
        }
        .navbar-brand, .nav-link {
            color: #fff !important;
        }
        .footer {
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .btn-primary {
            background: linear-gradient(90deg, #1e3c72 0%, #2a5298 100%);
            border: none;
        }
        .btn-secondary {
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            border: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Bolsa de Trabajo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/job_posts">Administrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <?= $this->renderSection('content') ?>
    </div>

    <footer class="footer mt-auto py-3" style="position:fixed; bottom:0; left:0; right:0">
        <div class="container">
            <span>&copy; <?= date('Y') ?> Bolsa de Trabajo. Todos los derechos reservados.</span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>