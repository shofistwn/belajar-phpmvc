<div id="content" class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Edit Data
    </button>


    <form action="<?= BASE_URL; ?>/siswa/hapus" method="post">
        <input type="text" class="form-control" id="id" name="id" value="<?= $data['siswa']['id']; ?>" hidden>
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASE_URL; ?>/siswa/edit" method="post">
                    <div class="modal-body">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $data['siswa']['id']; ?>" hidden>
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['siswa']['nama']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</la bel>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option <?= $data['siswa']['jenis_kelamin'] != 'Laki-laki' ?: 'selected' ?> value="Laki-laki">Laki - laki</option>
                                    <option <?= $data['siswa']['jenis_kelamin'] != 'Perempuan' ?: 'selected' ?> value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['siswa']['alamat']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
            <p class="card-text"><?= $data['siswa']['jenis_kelamin']; ?></p>
            <p class="card-text"><?= $data['siswa']['alamat']; ?></p>
        </div>
    </div>
</div>