<?php 
class Produk{
	public $brand,
		   $merk,
		   $noSeri,
		   $harga;

		public function __construct($brand = "brand", $merk = "merk", $noSeri = "noSeri", $harga = 0){
			$this ->brand   = $brand;
			$this ->merk    = $merk;
			$this ->noSeri  = $noSeri;
			$this ->harga   = $harga;
		}

	public function getLabel(){
		return "$this->merk, $this->noSeri";
	}
}

// class kedua
class cetakInfoProduk{
	public function cetak( Produk $produk ){
		$str = "{$produk->brand} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("VIVO", "VIVO V11 Pro", "V1000", 4000000);
$produk2 = new Produk("DELL", "DELL Latitude", "E4300", 2000000);

// menampilkan ke browser
echo "Marketplace HP di Indonesia : ". $produk1->getLabel()."<br>";
echo "Marketplace Laptop di Indonesia : ". $produk2->getLabel()."<br><br>";

$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1)."<br>";
echo $infoProduk1->cetak($produk2);