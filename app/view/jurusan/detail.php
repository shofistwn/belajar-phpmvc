<div id="content" class="container">

<h1 class="text-center">Selamat Datang di <?= $data['data_jurusan']['nama']; ?></h1>
    <div class="card mt-5">
        <div class="card-header">
            <h5 class="mb-0">Data Guru</h5>
        </div>
        <div class="card-body">
            <?php
            if (!empty($data['guru'])) {
            ?>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data['guru'] as $guru) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $guru['nama']; ?></td>
                                <td><?= $guru['mata_pelajaran']; ?></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="btn btn-primary">Detail</a>
                                        <a href="<?= BASE_URL; ?>/guru/edit/<?= $guru['id']; ?>" class="btn btn-warning mx-2">Edit</a>
                                        <form action="<?= BASE_URL; ?>/guru/hapus" method="post">
                                            <input type="text" class="form-control" id="id" name="id" value="<?= $guru['id']; ?>" hidden>
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

    <div class="card mt-5">
        <div class="card-header">
            <h5 class="mb-0">Data Siswa</h5>
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