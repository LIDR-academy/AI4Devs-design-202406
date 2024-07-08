<?= $this->extend('layouts/base') ?>

<?= $this->section('content') ?>
<h1 class="mb-4">Aplicar a <?= $job_post['title'] ?></h1>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if (isset($errors) && !empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/job_posts/save/<?= $job_post['id'] ?>" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nombre:</label>
        <input type="text" name="name" id="name" class="form-control" value="<?= old('name') ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico:</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Celular:</label>
        <input type="text" name="phone" id="phone" class="form-control" value="<?= old('phone') ?>" required>
    </div>
    <div class="mb-3">
        <label for="experience" class="form-label">Experiencia:</label>
        <textarea name="experience" id="experience" class="form-control" required><?= old('experience') ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse y Aplicar</button>
</form>
<?= $this->endSection() ?>