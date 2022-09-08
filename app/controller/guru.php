<?php
class Guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Guru";
        $data['guru'] = $this->model('GuruModel')->getGuru();
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model('GuruModel')->getGuruById($id);
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = "Detail Guru";
        $data['guru'] = $this->model('GuruModel')->getGuruById($id);
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('guru/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('GuruModel')->tambahData($_POST) > 0) {
            Flasher::setFlash('Data berhasil ditambahkan!', 'success');
        } else {
            Flasher::setFlash('Data gagal ditambahkan!', 'danger');
        }
        header('Location: ' . BASE_URL . '/guru');
        exit;
    }

    public function update()
    {
        if ($this->model('GuruModel')->updateData($_POST) > 0) {
            Flasher::setFlash('Data berhasil diupdate!', 'success');
        } else {
            Flasher::setFlash('Data gagal diupdate!', 'danger');
        }
        header('Location: ' . BASE_URL . '/guru/');
        exit;
    }

    public function hapus()
    {
        var_dump($_POST);
        if ($this->model('GuruModel')->hapusData($_POST) > 0) {
            Flasher::setFlash('Data berhasil dihapus!', 'success');
        } else {
            Flasher::setFlash('Data gagal dihapus!', 'danger');
        }
        header('Location: ' . BASE_URL . '/guru/');
        exit;
    }
}
