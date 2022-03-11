<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1 class="text-center mt-4">Belanja Online</h1>
<div class="d-flex justify-content-around p-4">
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin_cuci" required="required"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header bg-success border-success">Daftar Harga</div>
  <div class="card-body text-success">
    <p class="card-text">TV : 4.200.000</p><hr>
    <p class="card-text">Kulkas : 3.100.000</p><hr>
    <p class="card-text">Mesin Cuci : 3.800.000</p>
  </div>
  <div class="card-footer bg-success border-success">Harga Dapat Berubah Setiap Saat</div>
</div>
</div>
<div class="m-5 border border-dark p-4 rounded">
    <?php
        if(isset($_POST['submit'])){
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if($produk=='tv'){
                $harga = 4200000;
            }
            elseif($produk=='kulkas'){
                $harga = 3100000;
            }
            elseif($produk=='mesin_cuci'){
                $harga = 3800000;
            }

            $harga_total = $jumlah * $harga;

            switch($produk){
                case "tv": $produk = "TV"; break;
                case "kulkas": $produk = "KULKAS"; break;
                case "mesin_cuci": $produk = "MESIN CUCI"; break;
                default: "";
            }
        }
    ?>
    <?php if(isset($_POST['submit'])){?>
        <p>Nama Customer : <?=$customer?></p>
        <p>Pilih Produk : <?=$produk?></p>
        <p>Jumlah Beli : <?=$jumlah?></p>
        <p>Total Belanja : <?=$harga_total?></p>
        <?php }else{
            echo '<div class="alert alert-success" role="alert">Silahkan Isi Terlebih Dahulu</div>';
    }?>
</div>
</body>
</html>
