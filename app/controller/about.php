<?php
class About extends Controller
{
    public function index()
    {
        $data['judul'] = "About";
        $data['jurusan'] = $this->model('JurusanModel')->getJurusan();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
