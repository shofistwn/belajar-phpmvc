<div id="content" class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Siswa
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</la bel>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-laki">Laki - laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
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


    <h1 class="mt-5">Data Siswa</h1>
    <ul class="list-group">
        <?php foreach ($data['siswa'] as $siswa) : ?>
            <li class="list-group-item"><?= $siswa['nama']; ?>

                <a class="btn btn-primary" href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>">Detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>