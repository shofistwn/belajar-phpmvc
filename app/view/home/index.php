<div id="content" class="container">
    <div class="card">
        <div class="card-body">
            <h1>Selamat Datang!</h1>
            <?php foreach ($data['siswa'] as $siswa) : ?>
                <h4>Saya <?= $siswa['nama']; ?></h4>
            <?php endforeach; ?>
        </div>
    </div>
</div>