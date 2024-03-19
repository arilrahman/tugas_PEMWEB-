<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum2</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tugas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">




              
<!-- echo "<br>";
echo "IPK: $ipk <br>";

function status($ipk){
    if($ipk>=3 && $ipk<=4){
        return "LULUS";
    }
    else{
        return "GAGAL";
    }
}
echo "Status: ".status($ipk);

?> -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>Form Pendaftaran Siswa</h1>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jkl" id="jkl_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jkl_0" class="custom-control-label">laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jkl" id="jkl_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jkl_1" class="custom-control-label">perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Checkboxes</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox[]" id="checkbox_0" type="checkbox" class="custom-control-input" value="Main Game"> 
        <label for="checkbox_0" class="custom-control-label">Main Game</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox[]" id="checkbox_1" type="checkbox" class="custom-control-input" value="Membaca"> 
        <label for="checkbox_1" class="custom-control-label">Membaca</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox[]" id="checkbox_2" type="checkbox" class="custom-control-input" value="Nonton"> 
        <label for="checkbox_2" class="custom-control-label">Nonton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox[]" id="checkbox_3" type="checkbox" class="custom-control-input" value="Nulis"> 
        <label for="checkbox_3" class="custom-control-label">Nulis</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="checkbox[]" id="checkbox_4" type="checkbox" class="custom-control-input" value="Futsal"> 
        <label for="checkbox_4" class="custom-control-label">Futsal</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">IPK</label> 
    <div class="col-8">
      <input id="ipk" name="ipk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<?php
$nama = $_POST['nama'];
$jkl = $_POST['jkl'];
$checkbox = $_POST['checkbox'];
$ipk = $_POST['ipk'];
// print_r($checkbox);
//CETAK
echo "<h2>Informasi Yang Anda Kirim</h2>";
echo "Nama: $nama <br>";
echo "Jenis Kelamin: $jkl <br>";
echo "Hobby: ";
foreach ($checkbox as $value){
    echo "$value, ";
}
echo "<br>";
echo "IPK: $ipk <br>";

function status($ipk){
    if($ipk>=3 && $ipk<=4){
        return "lulus";
    }
    else{
        return "gagal";
    }
}
echo "Status: ".status($ipk);
?>
             





              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                ini hasil praktikum2
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
  include_once 'footer.php';
  ?>