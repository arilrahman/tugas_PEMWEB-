<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="PEMWEB2_praktimum2_hasil.php">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="text1" type="nama" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="studi" name="studi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programing</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="select_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="select_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_2" type="checkbox" class="custom-control-input" value="Java Script"> 
        <label for="select_2" class="custom-control-label">Java Script</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_3" type="checkbox" class="custom-control-input" value="RWD Booststrap"> 
        <label for="select_3" class="custom-control-label">RWD Booststrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="select_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_5" type="checkbox" class="custom-control-input" value="Python"> 
        <label for="select_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skil[]" id="select_6" type="checkbox" class="custom-control-input" value="Java"> 
        <label for="select_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div> 
 
  </div>
    </div>
  </div> 
 
  </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Select</label> 
    <div class="col-8">
      <select id="tempat_domisili" name="tempat_domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bekasi">Bekasi</option>
        <option value="Tanggerang">Tanggerang</option>
        <option value="Bogor">Bogor</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
