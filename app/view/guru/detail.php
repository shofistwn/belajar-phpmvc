<div id="content" class="container mb-5">

    <div class="card mx-auto" style="width: 28rem;">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['guru']['nama']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Mata Pelajaran</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $data['guru']['mata_pelajaran']; ?>" disabled>
            </div>
            <div class="text-center">
                <a href="<?= BASE_URL; ?>/guru" class="btn btn-secondary">Kembali</a>
                <a href="<?= BASE_URL; ?>/guru/edit/<?= $data['guru']['id']; ?>" class="btn btn-warning">Edit</a>
            </div>
        </div>
    </div>

</div>