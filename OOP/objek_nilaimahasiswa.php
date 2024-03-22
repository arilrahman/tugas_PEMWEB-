<!-- <?php
//require_once "class_nilaimahasiswa.php";

//objek
// $ns1 = new NilaiSiswa("Angga",40,"PSO");
// $ns2 = new NilaiSiswa("Lulu",90,"Web2");

// //cetak
// echo "Nama Mahasiswa : $ns1->nama <br>";
// echo "Nilai : $ns1->nilai<br>";
// echo "Mata Kuliah : $ns1->matakuliah<br>";
// echo "Status: ". $ns1->grade()."<br>";
// echo "Status: ". $ns1->getHasil();

// echo "<br><br>";

// echo "Nama Mahasiswa : $ns2->nama <br>";
// echo "Nilai : $ns2->nilai<br>";
// echo "Mata Kuliah : $ns2->matakuliah<br>";
// echo "Status: ". $ns2->grade()."<br>";
// echo "Status: ". $ns2->getHasil();
?> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Nilai Ujian</title>
</head>

<body>
    <div class="container">
        <h1>Form Nilai Ujian</h1>
        <form method="POST" action="objek_nilaimahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matakuliah" class="col-4 col-form-label">Pilihan MK</label>
                <div class="col-8">
                    <input id="matakuliah" name="matakuliah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
            
            <!-- </table> -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	require_once 'class_nilaimahasiswa.php';

	//Tangkap Data dari Form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $matakuliah = $_POST['matakuliah'];
    $prodi = $_POST['prodi'];

    //Buat Objek
	$ns = new NilaiMahasiswa($_nim, $_nama, $_nilai, $_matakuliah, $_prodi);
	
	//Tampilkan Data
	echo "<h2>Hasil Inputan</h2>";
	echo "<p>Nim: " .$ns->nim. "</p>";
    echo "<p>nama: " .$ns->nama. "</p>";
    echo "<p>Nilai: " .$ns->nilai."</p>";
	echo "<p>Mata Kuliah: " .$ns->matakuliah. "</p>";	
	echo "<p>Grade: " .$ns->grade(). "</p>";
    echo "<p>Status: " .$ns->getHasil(). "</p>";

}   
?>