<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4"><?= $job_post['title'] ?></h1>
<div class="card">
    <div class="card-body">
        <p><strong>Descripción:</strong> <?= $job_post['description'] ?></p>
        <p><strong>Requisitos:</strong> <?= $job_post['requirements'] ?></p>
        <p><strong>Rango Salarial:</strong> <?= $job_post['salary_range'] ?></p>
        <p><strong>Horario de Trabajo:</strong> <?= $job_post['work_schedule'] ?></p>
        <p><strong>Ubicación:</strong> <?= $job_post['location'] ?></p>
        <p><strong>Empresa:</strong> <?= $job_post['company'] ?></p>
        <a href="/" class="btn btn-secondary mt-3">Regresar a la Lista de Empleos</a>
        <a href="/job_posts/apply/<?= $job_post['id'] ?>" class="btn btn-primary mt-3">Aplicar</a>
    </div>
</div>
<?= $this->endSection() ?>