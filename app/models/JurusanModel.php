<?php

class JurusanModel
{
    private $table = 'data_jurusan';
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
        $hasil =  $this->db->resultSingle();
        return $hasil;
    }

    public function getSiswaByJurusan($jurusan)
    {
        $this->db->query("select * from data_siswa where jurusan=:jurusan");
        $this->db->bind('jurusan', $jurusan);
        return $this->db->resultAll();
    }

    public function getGuruByJurusan($jurusan)
    {
        $this->db->query("select * from data_guru where mata_pelajaran=:jurusan");
        $this->db->bind('jurusan', $jurusan);
        return $this->db->resultAll();
    }

    // public function getId()
    // {
    //     $this->db->query("SELECT id FROM " . $this->table . " ORDER BY id DESC LIMIT 1");
    //     return $this->db->resultSingle();
    // }

    // public function tambahData($data)
    // {
    //     $getId = $this->getId();
    //     $id = $getId['id'] + 1;

    //     $query = "insert into " . $this->table . " values (:id, :nama, :jenis_kelamin, :alamat)";
    //     $this->db->query($query);
    //     $this->db->bind('id', $id);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }

    // public function updateData($data)
    // {
    //     $query = "UPDATE " . $this->table . " SET id=:id, nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat where id=:id";
    //     $this->db->query($query);
    //     $this->db->bind('id', $data['id']);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }

    // public function hapusData($data)
    // {
    //     $query = "DELETE FROM " . $this->table . " where id=:id";
    //     $this->db->query($query);
    //     $this->db->bind('id', $data['id']);
    //     $this->db->execute();
    //     return $this->db->rowCount();
    // }
}
