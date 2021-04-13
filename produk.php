<?php 

// jual produk
// handphone
// laptop, dll
class Produk{
	public $brand 	= "brand",
		   $merk 	= "merk",
		   $noSeri 	= "noSeri",
		   $harga 	= 0;

	// method adalah function yang ada didalam class
	public function getLabel(){
		return "$this->brand, $this->merk";
	}
}
		// $produk1 = new Produk();
		// $produk1->brand = "Samsung";
		// $produk1->merk = "J7 Pro 2018";
		// var_dump($produk1);

		// // buat produk baru
		// $produk2 = new Produk();
		// $produk2->brand = "Realme";
		// $produk2->tambahProperty = "awokw";
		// var_dump($produk2);

// objek pertama
$produk3 		  = new Produk();
$produk3->brand   = "Xiaomi";
$produk3->merk    = "Redmi Note 8 Pro";
$produk3->noSeri  = "RM2007";
$produk3->harga   = 2000000;

// menampilkan ke browser
	// echo "Marketplace HP di Indonesia : <br> $produk3->brand, <br> $produk3->merk, <br> $produk3->noSeri, <br> $produk3->harga <br><br>";
	// echo $produk3->getLabel();
	// var_dump($produk3);

// objek kedua
$produk4 = new Produk();
$produk4->brand = "OPPO";
$produk4->merk = "OPPO Reno 5 5G";
$produk4->noSeri = "OP6000";
$produk4->harga = 5000000;

// menampilkan objek ke browser
echo "Marketplace HP di Indonesia : ". $produk3->getLabel();
echo "<br>";
echo "HP paling laris di Indonesia : ". $produk4->getLabel();