<?php
//looping dengan for
//perulangan angka 1-10
for($x=1; $x<=10; $x++){
    echo"<br> aku ganteng bgtz";
}
for($y=10; $y>=1; $y=$y-1){
    echo"<br> $y";
}

?>

<form> 
Jumlah masa aksi:
<?php
for($masa=1; $masa<=100; $masa=$masa+1){
    echo "<input type='radio' name='jlm_masa' value='masa'>". $masa;
}

?>
</form>