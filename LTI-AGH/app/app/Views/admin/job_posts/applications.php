<?= $this->extend('layouts/admin_base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Aplicaciones para <?= $job_post['title'] ?></h1>
<table id="applicationsTable" class="table table-striped table-dark">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Celular</th>
            <th>Experiencia</th>
            <th>Fecha de Aplicación</th>
            <th>Fase</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($applications as $application): ?>
            <tr>
                <td><?= $application['name'] ?></td>
                <td><?= $application['email'] ?></td>
                <td><?= $application['phone'] ?></td>
                <td><?= $application['experience'] ?></td>
                <td><?= $application['created_at'] ?></td>
                <td>
                    <form action="/admin/job_posts/update_phase/<?= $application['id'] ?>" method="post" class="d-inline">
                        <select name="phase" class="form-select form-select-sm" onchange="this.form.submit()">
                            <option value="applied" <?= $application['phase'] == 'applied' ? 'selected' : '' ?>>Aplicado</option>
                            <option value="interview" <?= $application['phase'] == 'interview' ? 'selected' : '' ?>>Entrevista</option>
                            <option value="hired" <?= $application['phase'] == 'hired' ? 'selected' : '' ?>>Contratado</option>
                            <option value="rejected" <?= $application['phase'] == 'rejected' ? 'selected' : '' ?>>Rechazado</option>
                        </select>
                    </form>
                </td>
                <td>
                    <a href="tel:<?= $application['phone'] ?>" class="btn btn-success btn-sm">Llamar</a>
                    <a href="mailto:<?= $application['email'] ?>" class="btn btn-primary btn-sm">Enviar Correo</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#applicationsTable').DataTable();
    });
</script>
<?= $this->endSection() ?>