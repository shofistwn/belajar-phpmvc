<div id="content" class="container my-5">

    <?php Flasher::flash(); ?>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Siswa</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                Tambah Siswa
            </button>
        </div>
        <div class="card-body">
            <?php
            if (!empty($data['siswa'])) {
            ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($data['siswa'] as $siswa) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $siswa['nama']; ?></td>
                                <td><?= $siswa['jenis_kelamin']; ?></td>
                                <td><?= $siswa['alamat']; ?></td>
                                <td><?= $siswa['jurusan']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary">Detail</a>
                                        <a href="<?= BASE_URL; ?>/siswa/edit/<?= $siswa['id']; ?>" class="btn btn-warning mx-2">Edit</a>
                                        <form action="<?= BASE_URL; ?>/siswa/hapus" method="post">
                                            <input type="text" class="form-control" id="id" name="id" value="<?= $siswa['id']; ?>" hidden>
                                            <button type="submit" onclick="return confirm('Hapus data?')" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php
            } else {
            ?>
                <p class="text-center mb-0">
                    Data Kosong
                </p>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDataLabel">Tambah Data Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="" disabled selected>Pilih:</option>                                
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="" cols="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jurusan</label>
                        <select class="form-select" id="jenis_kelamin" name="jurusan">
                            <option value="" selected disabled>Pilih:</option>
                            <?php
                            foreach ($data['jurusan'] as $jurusan) : ?>
                                <option value="<?= $jurusan['nama']; ?>"><?= $jurusan['nama']; ?></option>
                            <?php endforeach; ?>
                        </select>
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