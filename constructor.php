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

	// method adalah function yang ada didalam class
	public function getLabel(){
		return "$this->brand, $this->merk";
	}
}

$produk1 = new Produk("VIVO", "VIVO V11 Pro", "V1000", 4000000);
$produk2 = new Produk("DELL", "DELL Latitude E4300", 2000000);
$produk3 = new Produk("ASUS", "ASUS VivoBook 2000");

// menampilkan objek ke browser
echo "Marketplace HP di Indonesia : ". $produk1->getLabel();
echo "<br><br>";
echo "Marketplace Laptop di Indonesia : ". $produk2->getLabel();
echo "<br><br>";
echo "Marketplace Laptop di Indonesia : ". $produk3->getLabel();
// var_dump($produk2);