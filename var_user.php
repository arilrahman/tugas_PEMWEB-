<?php
// definisikan variables
$nama = 'Chairil rahman';
$umur = 18;
$berat = 51.4;

echo 'namaku adalah:' . $nama;
echo'<br>';
echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

echo "<br/>Hello $nama Apakabar";

echo'<hr>';

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

echo'<hr>';

// definisikan variabel konstanta
//  define: untuk memanggil variabel konstanta
define('PELAJARAN','pemweb');
echo PELAJARAN;

echo'<br>';

define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;
?>
<hr/>
<?php
echo 'Nama databasenya : '.DBNAME;
echo '<br/>Lokasi databasenya ada di '.DBSERVER;


?>