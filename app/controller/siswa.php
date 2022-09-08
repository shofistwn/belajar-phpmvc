<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model('SiswaModel')->getSiswa();
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model('SiswaModel')->getSiswaById($id);
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model('SiswaModel')->getSiswaById($id);
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('siswa/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('SiswaModel')->tambahData($_POST) > 0) {
            Flasher::setFlash('Data berhasil ditambahkan!', 'success');
        } else {
            Flasher::setFlash('Data gagal ditambahkan!', 'danger');
        }
        header('Location: ' . BASE_URL . '/siswa');
        exit;
    }

    public function update()
    {
        if ($this->model('SiswaModel')->updateData($_POST) > 0) {
            Flasher::setFlash('Data berhasil diupdate!', 'success');
        } else {
            Flasher::setFlash('Data gagal diupdate!', 'danger');
        }
        header('Location: ' . BASE_URL . '/siswa/');
        exit;
    }

    public function hapus()
    {
        var_dump($_POST);
        if ($this->model('SiswaModel')->hapusData($_POST) > 0) {
            Flasher::setFlash('Data berhasil dihapus!', 'success');
        } else {
            Flasher::setFlash('Data gagal dihapus!', 'danger');
        }
        header('Location: ' . BASE_URL . '/siswa/');
        exit;
    }
}
