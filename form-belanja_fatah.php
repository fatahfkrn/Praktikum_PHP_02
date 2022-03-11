<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form Belanja</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <style>
            .text-center {
                  text-align: center;
            }
      </style>
</head>

<body>
      <header>
            <div class="container-fluid bg-dark">
                  <h2 class="text-white text-center py-3">Belanja Online</h2>
            </div>
      </header>
      <main>
            <div class="container-fluid">
                  <div class="row">
                        <div class="container col-12 col-lg-6  py-5">
                              <form action="form-belanja_fatah.php" method="post">
                                    <div class="form-group row py-2">
                                          <label for="pelanggan" class="col-2 col-form-label">Customer:</label>
                                          <div class="col-6">
                                                <input id="pelanggan" name="pelanggan" value="" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                                          </div>
                                    </div>
                                    <div class="form-group row py-2">
                                          <label for="produk" class="col-2 col-form-label">Pilih Produk:</label>
                                          <div class="col-6 py-2">
                                                <label class="radio-inline px-3">
                                                      <input type="radio" name="produk" value="TV" checked> TV
                                                </label>
                                                <label class="radio-inline px-3">
                                                      <input type="radio" name="produk" value="Mesin Cuci" checked> Mesin Cuci
                                                </label>
                                                <label class="radio-inline px-3">
                                                      <input type="radio" name="produk" value="Kulkas" checked> Kulkas
                                                </label>
                                          </div>
                                    </div>
                                    <div class="form-group row py-2">
                                          <label for="produk" class="col-2 col-form-label">Jumlah</label>
                                          <div class="col-6">
                                                <input id="jumlah" name="jumlah" type="number" value="" class="form-control" max="10" required>
                                          </div>
                                    </div>
                                    <div class="form-group row py-2">
                                          <input type="submit" name="kirim" class="col-2 offset-2 btn btn-success">
                                          <div class="col-6">
                                          <span id="text1HelpBlock" class="form-text text-muted">*Scrool ke kebawah untuk melihat hasil (Pengguna Android)</span>
                                          </div>
                                    </div>
                              </form>
                        </div>
                        <div class="co-12 col-lg-4">
                              <div class="container py-3">
                                    <div class="row">
                                          <div class="col-12 bg-primary">
                                                <h3 class="display-6 text-light text-center">Daftar Harga</h1>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-12 bg-light py-2">
                                                <p class="lead text-dark">TV = Rp.4.200.000</p>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-12 bg-light py-2">
                                                <p class="lead text-dark">Kulkas = Rp.3.100.000</p>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-12 bg-light py-2">
                                                <p class="lead text-dark">Mesin Cuci = Rp.3.800.000</p>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-12 bg-primary">
                                                <p class="lead text-light mb-0 py-2">Harga Dapat Berubah Setiap Saat.</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
      <footer>
            <div class="container">
                  <div class="row">
                        <div class="col-12 col-lg-4">
                              <div class="border mt-5 px-2 py-2 bg-success">
                                    <?php
                                    $proses = $_POST['kirim'];
                                    if (!empty($proses)) {

                                          $nama = $_POST['pelanggan'];
                                          $produk = $_POST['produk'];
                                          $jumlah = $_POST['jumlah'];
                                    }

                                    echo '<p class=\'lead text-light\'>Customer: ' . $nama;
                                    echo '<p class=\'lead text-light\'>Nama Produk: ' . $produk;
                                    echo '<p class=\'lead text-light\'>Jumlah Produk: ' . $jumlah;

                                    if ($produk == "TV") {
                                          $total = intval($jumlah) * 4200000;
                                          echo '<p class=\'lead text-light\'>Total: ' . $total;
                                    } elseif ($produk == "Kulkas") {
                                          $total = intval($jumlah) * 3100000;
                                          echo '<p class=\'lead text-light\'>Total: ' . $total;
                                    } elseif ($produk == "Mesin Cuci") {
                                          $total = intval($jumlah) * 3800000;
                                          echo '<p class=\'lead text-light\'>Total: ' . $total;
                                    } else {
                                          $total = 0;
                                          echo '<p class=\'lead text-light\'>Total: ' . $total;
                                    }
                                    ?>
                              </div>
                        </div>
                  </div>
            </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
</body>

</html>