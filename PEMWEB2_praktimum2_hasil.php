<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $program_studi = $_POST["select"];
    $skill_web = isset($_POST["skil"]) ? $_POST["skil"] : [];
    $tempat_domisili = $_POST["tempat_domisili"];
    $email = $_POST["email"];

    // Hitung skor skill web
    $skor_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $total_skor = 0;
    foreach ($skill_web as $skill) {
        $total_skor += $skor_skill[$skill];
    }

    // Tentukan predikat
    if ($total_skor <= 0) {
        $predikat = "Tidak Memadai";
    } elseif ($total_skor <= 40) {
        $predikat = "Kurang";
    } elseif ($total_skor <= 60) {
        $predikat = "Cukup";
    } elseif ($total_skor <= 100) {
        $predikat = "Baik";
    } else {
        $predikat = "Sangat Baik";
    }

    // Tampilkan hasil
    echo "<h2>Hasil Registrasi:</h2>";
    echo "NIM: $nim<br>";
    echo "Nama: $nama<br>";
    echo "Jenis Kelamin: $jk<br>";
    echo "Program Studi: $program_studi<br>";
    echo "Skill : " . implode(", ", $skill_web) . "<br>";
    echo "Total Skor: $total_skor<br>";
    echo "Predikat: $predikat<br>";
    echo "Tempat Domisili: $tempat_domisili<br>";
    echo "Email: $email<br>";
}
?>
