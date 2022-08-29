<div id="content" class="container">
    <div class="row g-4">
        <?php foreach ($data['guru'] as $guru) : ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?= $guru['foto']; ?>" class="card-img-top">
                    <div class="card-body mt-4">
                        <h5 class="card-title"><?= $guru['nama']; ?></h5>
                        <p class="card-text">Mapel <?= $guru['mapel']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>