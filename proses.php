<?php
$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

$harga = 0;
if ($produk == "Iphone 16 Pro Max") {
    $harga = 320000000;
} elseif ($produk == "Samsung S24 Ultra") {
    $harga = 16000000;
} elseif ($produk == "Iphone 15") {
    $harga = 10000000;
} elseif ($produk == "Iphone 13") {
    $harga = 8500000;
} elseif ($produk == "Iphone 16") {
    $harga = 16000000;
} elseif ($produk == "Samsung S24 FE") {
    $harga = 10000000;
} elseif ($produk == "Xiaomi 14T Pro") {
    $harga = 9000000;
} elseif ($produk == "Xiaomi 15") {
    $harga = 12000000;
}

$total = $harga * $jumlah;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Output Transaksi</title>
</head>
<body bgcolor="#f5fffa">
  <div align="center" style="background-color:#2E8B57; color:white; padding:10px;">
    <h1>Hasil Transaksi</h1>
  </div>
  <hr>

  <p><b>Nama Pembeli:</b> <?php echo $nama; ?></p>
  <p><b>Produk:</b> <?php echo $produk; ?></p>
  <p><b>Jumlah:</b> <?php echo $jumlah; ?></p>
  <p><b>Total Harga:</b> Rp <?php echo number_format($total, 0, ',', '.'); ?></p>

  <br>
  <a href="index.html">Kembali ke Beranda</a>
</body>
</html>
