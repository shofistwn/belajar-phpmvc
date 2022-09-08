<?php

class JurusanModel
{
    private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getJurusan()
    {
        $this->db->query("select * from " . $this->table);
        return $this->db->resultAll();
    }

    public function getJurusanById($id)
    {
        $this->db->query("select * from " . $this->table . " where id=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }

    public function getId()
    {
        $this->db->query("SELECT id FROM " . $this->table . " ORDER BY id DESC LIMIT 1");
        return $this->db->resultSingle();
    }

    public function tambahData($data)
    {
        $getId = $this->getId();
        $id = $getId['id'] + 1;
        $nama = $data['nama'];
        $akreditasi = $data['akreditasi'];
        $jumlah_siswa = $data['jumlah_siswa'];

        $query = "insert into " . $this->table . " values ('$id', '$akreditasi', '$nama', '$jumlah_siswa')";
        $this->db->query($query);
        $this->db->execute();
    }

    public function editData($data)
    {
        $id = $data['id'];
        $nama = $data['nama'];
        $akreditasi = $data['akreditasi'];
        $jumlah_siswa = $data['jumlah_siswa'];

        $query = "UPDATE " . $this->table . " SET id='$id',nama='$nama',akreditasi='$akreditasi',jumlah_siswa='$jumlah_siswa' where id='$id'";
        $this->db->query($query);
        $this->db->execute();
    }

    public function hapusData($data)
    {
        $id = $data['id'];

        $query = "DELETE FROM " . $this->table . " where id='$id'";
        $this->db->query($query);
        $this->db->execute();
    }
}
