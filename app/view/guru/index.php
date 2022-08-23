<div id="content" class="container">
    <?php foreach ($data['guru'] as $guru) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $guru['foto']; ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $guru['nama']; ?></h5>
                <p class="card-text"><?= $guru['wali_kelas']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>