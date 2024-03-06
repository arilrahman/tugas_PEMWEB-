<title>Belanja Online</title>
  <style>
    #proses {
      background-color: #28a745; 
      border-color: #28a745;
    }
    .harga-title {
      background-color: #007bff;
      border-color: #007bff;
    }
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1>Belanja Online</h1>
<br>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4 order-md-1 mr-5">
      <form action="" method="post">
        <div class="form-row align-items-center mb-3">
          <div class="col-auto">
            <label for="customer" class="col-form-label">Customer</label>
          </div>
          <div class="col">
            <input type="text" class="form-control" id="customer" name="customer" required>
          </div>
        </div>
        <div class="mb-3">
          <label for="produk" class="form-label">Produk Pilihan</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="produk" id="tv" value="tv" required>
            <label class="form-check-label" for="tv">TV</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="kulkas" required>
            <label class="form-check-label" for="kulkas">Kulkas</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="mesin_cuci" required>
            <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
          <div class="col-8">
            <input id="jumlah" name="jumlah" type="text" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="proses" id="proses">Kirim</button>
      </form>
    </div>
    <div class="col-md-6 order-md-2 ml-5">
      <h3 class="harga-title">Daftar Harga</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TV</td>
            <td>Rp 4.200.000</td>
          </tr>
          <tr>
            <td>Kulkas</td>
            <td>Rp 3.100000</td>
          </tr>
          <tr>
            <td>Mesin Cuci</td>
            <td>Rp 3.800.000</td>
          </tr>
        </tbody>
      </table>
      <h3 class="harga-title">Harga Dapat Berubah Suatu Saat</h3>
    </div>
  </div>
  <br>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['proses'])) {
    
    $customer = $_POST["customer"];
    $selectedProduk = isset($_POST['produk']) ? $_POST['produk'] : '';
    $jumlah = $_POST["jumlah"];

    
    $productPrices = [
      'tv' => 4200000,
      'kulkas' => 3100000,
      'mesin_cuci' => 3800000
    ];

    $price = isset($productPrices[$selectedProduk]) ? $productPrices[$selectedProduk] : 0;

    
    $total = $jumlah * $price;

    
    // echo "<h4>Hasil Belanja:</h4>";
    echo "<p>Customer: $customer</p>";
    echo "<p>Produk Pilihan: $selectedProduk</p>";
    echo "<p>Jumlah Beli: $jumlah</p>";
    echo "<p>Total: " . number_format($total, 0, ',', '.') . "</p>";
  }
  ?>
</div>

</body>
</html>