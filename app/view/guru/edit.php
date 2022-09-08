<div id="content" class="container mb-5">

    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-body">
            <form action="<?= BASE_URL; ?>/guru/update" method="post">
                <input type="text" name="id" value="<?= $data['guru']['id']; ?>" hidden>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?= $data['guru']['nama']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_kelamin">Mata Pelajaran</label>
                    <select class="form-select" id="jenis_kelamin" name="mata_pelajaran">
                        <option value="">Pilih:</option>
                        <?php
                        foreach ($data['jurusan'] as $jurusan) : ?>
                            <option value="<?= $jurusan['nama']; ?>" <?php if ($jurusan['nama'] == $data['guru']['mata_pelajaran']) { ?> selected <?php } ?>><?= $jurusan['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="text-center">
                    <a href="<?= BASE_URL; ?>/guru" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>