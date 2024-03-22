<?php
//array: sekumpulan data
//array numerik dan array asosiatif
//pengulangan foreach



//1.array numerik
$ar_buah = array ('pepaya','mangga','pisang','jeruk');
//cetak indeks ke ?
echo $ar_buah[1];
echo '<br>';
//jumlah total buah
$jumlah = count($ar_buah);
echo $jumlah;
echo '<br>';

//lihat hasil sekumpulan data buah dengan foreach
foreach ($ar_buah as $value) {
    echo $value. '<br>';
}
echo '<br>';
foreach ($ar_buah as $index => $value) {
    echo "$index $value <br>";
}


//2.array asosiatif
$ar_sisga = array (10=>'lulu',20=>'angga',30=>'adi','afif');
foreach ($ar_sisga as $index => $value) {
    echo "$index $value <br>";
}

?>