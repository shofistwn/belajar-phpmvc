<?php
class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Data Siswa";
        $data['siswa'] = $this->model('SiswaModel')->getSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model('SiswaModel')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['nama'] = $_POST['nama'];
        $data['jenis_kelamin']    = $_POST['jenis_kelamin'];
        $data['alamat'] = $_POST['alamat'];
        
        $this->model('SiswaModel')->tambahData($data);
        if (!empty($data)) {
            header('Location: ' . BASE_URL . '/siswa');
        }
    }
}
