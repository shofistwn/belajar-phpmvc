<?php
class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "SMKN 2 Trenggalek";
        $data['siswa'] = $this->model('SiswaModel')->getSiswa();
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
