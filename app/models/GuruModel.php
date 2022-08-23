<?php

class GuruModel
{
    private $guru = [
        [
            "foto" => "img/woman.png",
            "nama" => "Novi Dyah Puspitasari",
            "wali_kelas" => "XII RPL C"
        ],
    ];

    public function getGuru()
    {
        return $this->guru;
    }
}
