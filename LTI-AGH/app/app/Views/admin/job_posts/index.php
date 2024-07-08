<?= $this->extend('layouts/admin_base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Lista de Puestos</h1>
<?php if (isset($success)): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif; ?>
<a href="/admin/job_posts/create" class="btn btn-primary mb-3">Crear Nuevo Puesto</a>
<table id="jobPostsTable" class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Requisitos</th>
            <th>Rango Salarial</th>
            <th>Horario de Trabajo</th>
            <th>Ubicación</th>
            <th>Empresa</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($job_posts as $job_post): ?>
            <tr>
                <td><?= $job_post['title'] ?></td>
                <td><?= substr($job_post['description'], 0, 50) ?>...</td>
                <td><?= substr($job_post['requirements'], 0, 50) ?>...</td>
                <td><?= $job_post['salary_range'] ?></td>
                <td><?= $job_post['work_schedule'] ?></td>
                <td><?= $job_post['location'] ?></td>
                <td><?= $job_post['company'] ?></td>
                <td>
                    <a href="/admin/job_posts/edit/<?= $job_post['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="/admin/job_posts/delete/<?= $job_post['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    <a href="/admin/job_posts/applications/<?= $job_post['id'] ?>" class="btn btn-info btn-sm">Ver Aplicaciones</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#jobPostsTable').DataTable();
    });
</script>
<?= $this->endSection() ?>