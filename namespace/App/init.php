<?php

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/HP.php';
// require_once 'Produk/Laptop.php';
// require_once 'Produk/cetakInfoProduk.php';

// require_once 'Produk/Mahasiswa.php';
// require_once 'Service/Mahasiswa.php';

	spl_autoload_register(function($class){
		// App\Produk\Mahasiswa = ["App", "Produk", "Mahasiswa"]
		$class = explode('\\', $class);
		$class = end($class);
		require_once __DIR__. '/Produk/'. $class .'.php';
	});

	spl_autoload_register(function($class){
		$class = explode('\\', $class);
		$class = end($class);
		require_once __DIR__. '/Service/'. $class .'.php';
	});