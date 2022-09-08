<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Jurusan";
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Jurusan";
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $data['data_jurusan'] = $this->model('JurusanModel')->getJurusanById($id);
        $data['siswa'] = $this->model('JurusanModel')->getSiswaByJurusan($data['data_jurusan']['nama']);
        $data['guru'] = $this->model('JurusanModel')->getGuruByJurusan($data['data_jurusan']['nama']);
        $this->view('templates/header', $data);
        $this->view('jurusan/detail', $data);
        $this->view('templates/footer');
    }

    // public function edit($id)
    // {
    //     $data['judul'] = "Detail Jurusan";
    //     $data['jurusan'] = $this->model('JurusanModel')->getJurusanById($id);
    //     $this->view('templates/header', $data);
    //     $this->view('jurusan/edit', $data);
    //     $this->view('templates/footer');
    // }

    // public function tambah()
    // {
    //     if ($this->model('JurusanModel')->tambahData($_POST) > 0) {
    //         Flasher::setFlash('Data berhasil ditambahkan!', 'success');
    //     } else {
    //         Flasher::setFlash('Data gagal ditambahkan!', 'danger');
    //     }
    //     header('Location: ' . BASE_URL . '/jurusan');
    //     exit;
    // }

    // public function update()
    // {
    //     if ($this->model('JurusanModel')->updateData($_POST) > 0) {
    //         Flasher::setFlash('Data berhasil diupdate!', 'success');
    //     } else {
    //         Flasher::setFlash('Data gagal diupdate!', 'danger');
    //     }
    //     header('Location: ' . BASE_URL . '/jurusan/');
    //     exit;
    // }

    // public function hapus()
    // {
    //     var_dump($_POST);
    //     if ($this->model('JurusanModel')->hapusData($_POST) > 0) {
    //         Flasher::setFlash('Data berhasil dihapus!', 'success');
    //     } else {
    //         Flasher::setFlash('Data gagal dihapus!', 'danger');
    //     }
    //     header('Location: ' . BASE_URL . '/jurusan/');
    //     exit;
    // }
}
