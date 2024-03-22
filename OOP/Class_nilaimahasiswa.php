<?php

class NilaiMahasiswa
{
    public $nim;
    public $nama;
    public $matakuliah;
    public $prodi;
    public $nilai;

    public function __construct($_nim, $_nama, $_matakuliah, $_prodi, $_nilai){
        $this -> nim = $_nim;
        $this -> nama = $_nama;
        $this -> matakuliah = $_matakuliah;
        $this -> prodi = $_prodi;
        $this -> nilai = $_nilai;
    }

    public function grade(){
        if ($this->nilai >= 85) return "A";
        elseif ($this->nilai >= 70) return "B";
        elseif ($this->nilai >= 69) return "C";
        elseif ($this->nilai >= 55) return "D";
        else return "E";
    }

    public function getHasil(){
        if ($this->nilai > 70) return "LULUS";
        else return "TIDAK LULUS";
    }
}
    
?>