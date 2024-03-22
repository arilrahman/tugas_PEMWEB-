<?php
//object oriented programer (OOP)
//class: template/blueprint (denah rumah)
//object: isi, rumah

//self::
//this->
//___constuctor






//class
class NilaiSiswa
{
    public $nama;
    public $nilai;
    public $matakuliah;


    public function getHasil(){
        if ($this->nilai > 55) return "LULUS";
        else return "TIDAK LULUS";
    }
}

    //objek
$ns1 = new NilaiSiswa();
$ns1->nama = "Angga";
$ns1->nilai = 90;
$ns1->matakuliah = "PSO";

//cetal
echo "Nama Mahasiswa: $ns1->nama <br>";
echo "Nilai: $ns1->nilai <br>";
echo "Mata Kuliah: $ns1->matakuliah <br>";
echo "Status: ". $ns1->getHasil();





?>