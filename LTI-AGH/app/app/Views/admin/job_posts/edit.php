<?= $this->extend('layouts/admin_base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Editar Puesto</h1>
<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<form action="/admin/job_posts/update/<?= $job_post['id'] ?>" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Título:</label>
        <input type="text" name="title" id="title" class="form-control" value="<?= old('title', $job_post['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción:</label>
        <textarea name="description" id="description" class="form-control" required><?= old('description', $job_post['description']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="requirements" class="form-label">Requisitos:</label>
        <textarea name="requirements" id="requirements" class="form-control" required><?= old('requirements', $job_post['requirements']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="salary_range" class="form-label">Rango Salarial:</label>
        <input type="text" name="salary_range" id="salary_range" class="form-control" value="<?= old('salary_range', $job_post['salary_range']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="work_schedule" class="form-label">Horario de Trabajo:</label>
        <input type="text" name="work_schedule" id="work_schedule" class="form-control" value="<?= old('work_schedule', $job_post['work_schedule']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Ubicación:</label>
        <input type="text" name="location" id="location" class="form-control" value="<?= old('location', $job_post['location']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="company" class="form-label">Empresa:</label>
        <input type="text" name="company" id="company" class="form-control" value="<?= old('company', $job_post['company']) ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    <a href="/admin/job_posts" class="btn btn-secondary">Cancelar</a>
</form>
<?= $this->endSection() ?>