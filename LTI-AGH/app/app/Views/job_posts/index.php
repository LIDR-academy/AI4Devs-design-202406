<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Lista de Puestos</h1>
<div class="row">
    <?php foreach ($job_posts as $job_post): ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= $job_post['title'] ?></h5>
                    <p class="card-text"><?= substr($job_post['description'], 0, 100) ?>...</p>
                    <p class="card-text"><small class="text-muted"><?= $job_post['location'] ?> - <?= $job_post['company'] ?></small></p>
                    <a href="/job_posts/show/<?= $job_post['id'] ?>" class="btn btn-primary">Ver Detalles</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>