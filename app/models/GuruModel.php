<?php

class GuruModel
{
    private $table = 'data_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getGuru()
    {
        $this->db->query("select * from " . $this->table);
        return $this->db->resultAll();
    }

    public function getGuruById($id)
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

        $query = "insert into " . $this->table . " values (:id, :nama, :mata_pelajaran)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateData($data)
    {
        $query = "UPDATE " . $this->table . " SET id=:id, nama=:nama, mata_pelajaran=:mata_pelajaran where id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($data)
    {
        $query = "DELETE FROM " . $this->table . " where id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
