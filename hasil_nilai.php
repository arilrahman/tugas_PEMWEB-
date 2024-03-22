<?php
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
 
//Buat total nilai
//nilau uts + nilai uas + nilai tugas/3
$total_nilai = ($nilai_uas + $nilai_uts + $nilai_tugas) / 3;

//Buat perhitungan IF untuk mrncari Grade
if ($total_nilai >= 85){
    $grade = "A";
}
elseif ($total_nilai >= 70){
    $grade = "B";
}
elseif ($total_nilai >= 56){
    $grade = "C";
}
elseif ($total_nilai >= 30){
    $grade = "D";
}
else {
    $grade = "E";
}

//Buat perhitungan swichcase untuk mencari predikat
switch ($grade){
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    default:
    $predikat = "tidak ada";
    
}

//Buat perhitugan if untuk mencari status lulu/gagal
if($total_nilai >= 70){
    $status = "lulus";
}
else {
    $status = "gagal";
}
//cetak hasil
echo 'Nama:' .  $nama . '<br>';
echo 'Mata kuliah:' .  $matkul . '<br>';
echo 'Nilai UTS:' .  $nilai_uts . '<br>';
echo 'Nilai UAS:' .  $nilai_uas . '<br>';
echo 'Nilai Tugas:' .  $nilai_tugas . '<br>';
echo 'Total Nilai:' .  $total_nilai . '<br>';
echo 'Grade:' .  $grade . '<br>';
echo 'Predikat:' .  $predikat . '<br>';
echo 'Status:' .  $status . '<br>';

?>