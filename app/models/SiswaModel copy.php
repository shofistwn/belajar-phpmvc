<?php

class SiswaModel
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;dbname=db_smkn2"   ;

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getSiswa()
    {
        $this->stmt = $this->dbh->prepare('select * from data_siswa');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
