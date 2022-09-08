<div id="content" class="container mb-5">

    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['siswa']['nama']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['siswa']['jenis_kelamin']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlInput2" name="alamat" disabled><?= $data['siswa']['alamat']; ?></textarea>
            </div>
            <div class="text-center">
                <a href="<?= BASE_URL; ?>/siswa" class="btn btn-secondary">Kembali</a>
                <a href="<?= BASE_URL; ?>/siswa/edit/<?= $data['siswa']['id']; ?>" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>

</div>