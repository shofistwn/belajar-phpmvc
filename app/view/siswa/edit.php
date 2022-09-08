<div id="content" class="container mb-5">

    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-body">
            <form action="<?= BASE_URL; ?>/siswa/update" method="post">
                <input type="text" name="id" value="<?= $data['siswa']['id']; ?>" hidden>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $data['siswa']['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="" selected disabled>Pilih:</option>
                        <option <?= $data['siswa']['jenis_kelamin'] != 'Laki-laki' ?: 'selected' ?> value="Laki-laki">Laki - laki</option>
                        <option <?= $data['siswa']['jenis_kelamin'] != 'Perempuan' ?: 'selected' ?> value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlInput2" name="alamat"><?= $data['siswa']['alamat']; ?></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Jurusan</label>
                    <select class="form-select" id="jenis_kelamin" name="jurusan">
                        <option value="">Pilih:</option>
                        <?php
                        foreach ($data['jurusan'] as $jurusan) : ?>
                            <option value="<?= $jurusan['nama']; ?>" <?php if ($jurusan['nama'] == $data['siswa']['jurusan']) { ?> selected <?php } ?>><?= $jurusan['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="text-center">
                    <a href="<?= BASE_URL; ?>/siswa" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>