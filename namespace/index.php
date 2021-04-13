<?php

require_once 'App/init.php';

// menginstansiasi class
$produk1 = new HP("VIVO", "V11 Pro", "V1000", 4000000, "4/64", "GB");
$produk2 = new Laptop("DELL", "Latitude", "E4300", 2000000, "Intel Core I7");

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// menampilkan ke browser
echo $cetakProduk->cetak(). "<hr>";

use App\Service\Mahasiswa as ServiceMahasiswa;
use App\Produk\Mahasiswa as ProdukMahasiswa;

new ServiceMahasiswa();
echo "<br>";
new ProdukMahasiswa();