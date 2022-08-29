<?php

class SiswaModel
{
    private $table = 'data_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSiswa()
    {
        $this->db->query("select * from " . $this->table);
        return $this->db->resultAll();
    }

    public function getSiswaById($id)
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
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];

        $query = "insert into " . $this->table . " values ('$id', '$nama' , '$jenis_kelamin', '$alamat')";
        $this->db->query($query);
        $this->db->execute();
    }

    public function editData($data)
    {
        $id = $data['id'];
        $nama = $data['nama'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];

        $query = "UPDATE " . $this->table . " SET id='$id',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id='$id'";
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
