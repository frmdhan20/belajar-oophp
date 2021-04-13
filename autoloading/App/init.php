<?php

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/HP.php';
// require_once 'Produk/Laptop.php';
// require_once 'Produk/cetakInfoProduk.php';

spl_autoload_register(function($class){
	require_once 'Produk/'. $class .'.php';
});