<div id="content" class="container my-5">

    <div class="d-flex justify-content-between mb-4">
        <h1>Jurusan</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Jurusan
        </button>
    </div>
    <ul class="list-group">
        <?php foreach ($data['jurusan'] as $jurusan) : ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $jurusan['nama']; ?>

                <a class="btn btn-primary" href="<?= BASE_URL; ?>/jurusan/detail/<?= $jurusan['id']; ?>">Detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL; ?>/jurusan/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="akreditasi">Akreditasi</la bel>
                            <select class="form-control" id="akreditasi" name="akreditasi">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="N/A">N/A</option>
                            </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_siswa">Jumlah Siswa</label>
                        <input type="number" class="form-control" id="jumlah_siswa" name="jumlah_siswa">
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