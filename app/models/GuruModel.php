<?php

class GuruModel
{
    private $guru = [
        [
            "foto" => "img/woman.png",
            "nama" => "NOVI DYAH PUSPITASARI, S.Pd",
            "mapel" => "RPL"
        ],
        [
            "foto" => "img/woman.png",
            "nama" => "SAFIRA MAYA SHOVIE, S.Pd",
            "mapel" => "RPL"
        ],
        [
            "foto" => "img/woman.png",
            "nama" => "ERVI RAHMAWATI, ST",
            "mapel" => "RPL"
        ],
        [
            "foto" => "img/woman.png",
            "nama" => "FIKROTU DWI FUADATUZZAHRO",
            "mapel" => "RPL"
        ],
        [
            "foto" => "img/woman.png",
            "nama" => "WAHYU TRI WULYANSARI, S.Pd",
            "mapel" => "RPL"
        ],
    ];

    public function getGuru()
    {
        return $this->guru;
    }
}
