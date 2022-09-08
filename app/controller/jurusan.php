<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Jurusan";
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Jurusan";
        $data['jurusan'] = $this->model('JurusanModel')->getJurusanById($id);
        $this->view('templates/header', $data);
        $this->view('jurusan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['nama'] = $_POST['nama'];
        $data['akreditasi']    = $_POST['akreditasi'];
        $data['jumlah_siswa'] = $_POST['jumlah_siswa'];
        
        $this->model('JurusanModel')->tambahData($data);
        if (!empty($data)) {
            header('Location: ' . BASE_URL . '/jurusan');
        }
    }
}
